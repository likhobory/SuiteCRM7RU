**SYNOPSIS**  
    Creates new SuiteCRM language pack without unused language strings.

**USAGE**  
    Remove-UnusedStrings [[-SUITE_PATH] <String>] [[-LANGPACK_PATH] <String>] [[-LANG] <String>] [[-NEW_BASE] <String>] [[-SUF] <Regex>] [-SHOWKEYS] [<CommonParameters>]

**ALIASES**  
    ru
	
	
**DESCRIPTION**  
    This cmdlet gets all language files from language pack, compares them with all language files from SuiteCRM instance, removes any unused strings and puts new language files into specified folder.


**PARAMETERS**  
```
    -SUITE_PATH <String>
        Path to the SuiteCRM instance (C:\develop\Suite\SuiteCRM if omitted).

        Required?                        false
        Position?                        1
        Default value                    C:\develop\Suite\SuiteCRM


    -LANGPACK_PATH <String>
        Path to the language pack instance (C:\develop\Suite\rapira-suite_pack_russian if omitted).

        Required?                        false
        Position?                        2
        Default value                    C:\develop\Suite\rapira-suite_pack_russian

    -LANG <String>
        Language parameter (ru_ru if omitted)
        
        Required?            		 false
        Position?           		 3
        Default value                	 ru_ru
		
		
    -NEW_BASE <String>
        Path to the new folder for generated files w/o unused language strings.

        Required?                        false
        Position?                        4
        Default value                    new-langpack


    -SUF <Regex>
        Suffix in regex format for unused strings in language files which you do not want to remove.

        Required?                        false
        Position?                        5
        Default value                    PR\s*#


    -SHOWKEYS <SwitchParameter>
        Display all unique keys from removed language strings.

        Required?                        false
        Position?                        named
        Default value                    false
```

**OUTPUTS**  
    The number of removed language strings or sorted keys from removed strings.


**EXAMPLE**  
    
`    C:\PS>Remove-UnusedStrings -LANGPACK_PATH C:\rapira-suite_pack_russian-7.9.5 -SUITE_PATH C:\suitecrm-7.9.5  -NEW_BASE new-folder -SUF "PR\s*#1868"` > c:\unused.txt
    
    Removes all unused strings from RAPIRA langpack except those strings with "PR #1868" substring in comments: 'LBL_RENDERERS_TABLE' =>'Таблица', /// for PR #1868 and saves the output to c:\unused.txt

	
