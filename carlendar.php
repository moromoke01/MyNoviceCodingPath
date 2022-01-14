<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="cal.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
         <?php
                  $months = array("31","28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31");
                  $name = array("Jan", "Feb", "Mar", "Apr", "May", "June", "July","Aug", "Sept", "Oct", "Nov", "Dec");
                  $StartingPoint = 1;
                  for ($thismonth = 0; $thismonth < count($months); $thismonth++)
                  {
                    
       ?>
        <table>
            
            <tr><th>S</th><th>M</th><th>T</th><th>W</th><th>TH</th><td>F</th><th>SA</th></tr>
            <tr>
               <?php
                  $counter = 1;
                  $pos = 1;
                  for ($free = 1; $free < $StartingPoint; $free++)
                       {
                         $counter++;
                            ?>
                
                            <td></td>
                            
                            <?php
                       }
                   for ($day = 1; $day <=$months[$thismonth]; $day++)
                   {
                       ?>
                        <td><?php echo ($day); ?></td>
                        
                     <?php
                        
                       
                     
                    if (($counter % 7) == 0)
                     {
                        $pos = 1;
                        ?>
                            </tr><tr>
                                <?php
                     }
                     else
                     {
                          $pos++;
                     }
                     $counter++;
                      
                     if (($day == $months[$thismonth]) && ($pos != 1))
                     {
                         $StartingPoint = $pos;
                     }
                   }
                  }
                   ?>
            </tr>
                
        </table>
    </body>
</html>
