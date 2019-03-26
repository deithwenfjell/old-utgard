<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" 
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <body style="font-family:Arial;font-size:12pt;background-color:#dabc78">
        <xsl:for-each select="zoznam/clen">
            <div style="background-color:teal;color:white;padding:4px">
                <span style="font-weight:bold">
                    <xsl:value-of select="nick"/> - 
                </span>
                <xsl:value-of select="vojsko/uloha"/>
            </div>
            <img width="100" height="100" src="{obrazok}" class="CalloutRightPhoto"/>
            
            <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
                <p><u>Zbrane</u>:  
                    <xsl:value-of select="vojsko/zbrane"/>
                  </p>
                </div>
            <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
              <p>
                    <u>Zbroj</u>: 
                    <span style="font-style:italic"> 
                        <xsl:value-of select="vojsko/zbroj"/> zbroj
                    </span>
                </p>
            </div>
        </xsl:for-each>
    </body>
</html>