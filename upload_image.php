 <html> 
  <head> 
   <title> Upload your pic to our site! </title> 
   <style type="text/css"> 
   <!--
td{vertical-align: top;}
--> 
   </style> 
  </head> 
  <body> 
    <form action="check_image.php" method="post" enctype="multipart/form-data"> 
    <table> 
     <tr> 
      <td>  Your Username  </td> 
      <td>  <input type="text" name="username"/>  </td> 
     </tr> 
      <td>  Upload Image*  </td> 
      <td>  <input type="file" name="uploadfile": />  </td > 
     </tr >  <tr> 
      <td colspan="2"> 
       <small>  <em> * Acceptable image formats include: GIF, JPG/JPEG and PNG.
        </em>  </small > 
      </td > 
     </tr >   <tr > 
      <td >  Image Caption  <br/> 
      </td > 
      <td >  <input type="text" name="caption" />  </td > 
     </tr>  <tr> 
      <td colspan="2" style="text-align: center"> 
       <input type="submit" name="submit" value="Upload"/> 
      </td> 
     </tr> 
    </table> 
   </form> 
  </body> 
 </html> 