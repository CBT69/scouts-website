<?xml version="1.0" encoding="UTF-8"?> 
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match="/">

<html>
    <head>
    <title>Badges List</title>
    </head>
<body style="background-color:antiquewhite; text-align: center" >
<div style= "padding: 20px">
<h2 style="font-size: 29px">Badges List</h2>
<table border="1" style="text-align: center">
    <tr bgcolor="darkolivegreen">
        <th style="padding: 15px; text-align: center">Badge</th>
        <th>Image</th>
        <th style="padding: 5px">Description</th>
    </tr>
    <xsl:for-each select="badgelist/badge">
    <tr>
        <td><xsl:value-of select="badgename"/></td>
        <td><img src="{imagePath}" /></td>
        <td><xsl:value-of select="description"/></td>
    </tr>
   </xsl:for-each>
</table>
</div>
</body>
</html>
    
</xsl:template> 
</xsl:stylesheet>