 Function Get-RegExp
 {

    param (
        [string]$suffix,
        [parameter(mandatory=$true)]
        [ValidateNotNullOrEmpty()]
        [string]$InitRegexpString
            )
    
    
            if (!$suffix)
                { $RegExp=$InitRegexpString }
            else
                { $RegExp="$InitRegexpString(?!.*$SUF)" }

            $RegExp

 }


 Function Remove-UnusedStrings
 { 
     <# 
    .SYNOPSIS
     Creates new SuiteCRM language pack without unused language strings.
    .DESCRIPTION
     This cmdlet do not remove anything from the existing language pack or SuiteCRM instance,
     it compares all language files from language pack with all language files from SuiteCRM instance, removes any unused strings and puts new language files into specified folder.
    .OUTPUTS
     The number of removed language strings or sorted keys from removed strings. 
    .EXAMPLE
     Remove-UnusedStrings -LANGPACK_PATH C:\rapira-suite_pack_russian-7.9.5 -SUITE_PATH C:\suitecrm-7.9.5  -NEW_BASE new-folder -SUF "PR\s*#1868" -SHOWKEYS
     Removes all unused strings from RAPIRA langpack except those strings with "PR #1868" substring in comments: 'LBL_RENDERERS_TABLE' =>'Таблица', /// for PR #1868
     #>
   

[CmdletBinding()]
   


param (
        [ValidateScript({Test-Path $_})]
        #Path to the SuiteCRM instance (C:\develop\Suite\SuiteCRM if omitted).
        [string]$SUITE_PATH ="C:\develop\Suite\SuiteCRM",

        [ValidateScript({Test-Path $_})]
        #Path to the language pack instance (C:\develop\Suite\rapira-suite_pack_russian if omitted).
        [string]$LANGPACK_PATH ="C:\develop\Suite\rapira-suite_pack_russian",

        [ValidateScript({$_ -match "^[a-z]{2}_[a-z]{2}$"})]
        #Language parameter (ru_ru if omitted)
        [string]$LANG ="ru_ru",

        [ValidateNotNullOrEmpty()]
        [Alias('nb')]
        #Path to the new folder for generated files w/o unused language strings.
        [string]$NEW_BASE ="new-langpack",

        #Suffix in regex format for unused strings in language files which you do not want to remove.
        [regex]$SUF="PR\s*#",

        [Alias('sk')]
        #Display all unique keys from removed language strings.
        [switch]$SHOWKEYS=$false
      )


[string]$EN_BASE=Split-Path $SUITE_PATH -Leaf
[string]$RUS_BASE=Split-Path $LANGPACK_PATH -Leaf
[System.IO.FileInfo[]]$en=@()
[string[]]$unused=@()
[string[]]$allunused=@()


[PSCustomObject]@{
'SuiteCRM path'=$SUITE_PATH
'Langpack path'=$LANGPACK_PATH
'New folder path'=Join-Path (Split-Path $LANGPACK_PATH) $NEW_BASE
'Suffix for excluded strings'=$SUF
} |fl 


#$UTF8NoBom = New-Object System.Text.UTF8Encoding $False

$en=ls $SUITE_PATH -recurs -inc *en_us* -exc *demo*, *.js -File



#for unused strings like 'key'=>'value'

    [string]$reg_en="'[A-Z\d]+_[\w%]+'"

    [string]$reg_ru=Get-RegExp -suffix $SUF -InitRegexpString $reg_en

    Write-Verbose "RegExp for key-value format: $reg_ru"



    foreach ($file in $en)

    {

        $rfile=ls ($file.FullName -replace  [regex]::Escape($SUITE_PATH), $LANGPACK_PATH -replace  'en_us', $LANG) -EA Inquire

        Write-Progress -activity "Searching for unused strings..." -status "Processing: $rfile" 

        $langen=($file |sls $reg_en  -AllMatches -CaseSensitive).matches.value|sort|gu
        $langrus=($rfile |sls $reg_ru -AllMatches -CaseSensitive).matches.value|sort|gu

        $unused=$langrus|? {$langen -notcontains $_}

  
       
        New-Item ($rfile.DirectoryName -replace  $RUS_BASE, $NEW_BASE)  -ItemType directory -Force | Write-Verbose
 
        if (!$unused)
           { cp $rfile ($rfile.FullName -replace  $RUS_BASE, $NEW_BASE) }
        else 
           { 
             $MyFile=$rfile|sls $unused  -notmatch|% {$_.line} 
             [System.IO.File]::WriteAllLines(($rfile.FullName -replace  $RUS_BASE, $NEW_BASE), $MyFile) 
             $allunused+=$unused
           }
       
    }



# for unused arrays from \include\language\en_us.lang.php
     $file=ls ("$SUITE_PATH\include\language\en_us.lang.php")
     $rfile=ls "$(Split-Path $LANGPACK_PATH)\$NEW_BASE\include\language\$LANG.lang.php"

     $rfileGC=gc -Raw -Encoding UTF8 $rfile


     $reg_en= "(?s)(?>'\w+')(?=\s*=>\s*array)|(?-s)(?>\$.*\])"

     $reg_ru=Get-RegExp -suffix $SUF -InitRegexpString $reg_en

     Write-Verbose "RegExp for arrays: $reg_ru"

     
     $langen=(gc $file -Raw |sls $reg_en -AllMatches).Matches.Groups.Value|sort|gu
     $langrus=($rfileGC|sls $reg_ru -AllMatches).Matches.Groups.Value|sort|gu


     $unused=$langrus |? {$langen  -notcontains $_}
      
     $allunused+=$unused
      
    
     if ($SHOWKEYS -and $allunused.Count -gt 0) 
        { 
          "Sorted keys from removed strings:`n"
          $allunused|sort|group -NoElement|`
          ft @{label="Key";expression={$_.name}},@{label="Qty";expression={$_.count}} -AutoSize
        }

     
     if ($unused)  
        { 
          $unused=$unused|% {[regex]::Escape($_)} |% {"(?s)$_.*?(\),|;)"}
          [System.IO.File]::WriteAllLines($rfile,  ($rfileGC -replace ($unused -join "|")))
        }

     "`nTotal strings removed: $($allunused.Count)`n"  
     
    
 } 

    Set-Alias ru Remove-UnusedStrings
    
    Export-ModuleMember -Function Remove-UnusedStrings  -Alias ru
