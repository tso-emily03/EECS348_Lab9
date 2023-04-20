<?php
$size= $_POST['size'];
  function multTable($num){
    echo "<table id=\"multiplicationTable\" class=\"mulTable\" >";
    for($row = 0; $row <= $num; $row++){
      echo "<tr>";
      for($col = 0; $col <= $num; $col++){
        if($col == 0 && $row == 0){
          echo "<td> &nbsp </td>";
        }
        else if($row == 0 ){
          echo "<td>" . $col . "</td>";
        }
        else if($col == 0){
          echo "<td>" . $row . "</td>";
        }
        else{
          echo "<td>" . $row * $col . "</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  echo "<html>
      <head>
        <style>
          body{
            background-color: white;
            font-family: monospace;
          }
          tr:nth-child(odd){
            background-color: white;
          }
          tr:nth-child(even){
            background-color: white;
          }
          td, th{
            font-size: 25px;
            border: 2px solid black;
            text-align: left;
            padding: 12px;
          }
          tr:first-child{
            background-color: white;
            color: black;
          }
          td:first-child{
            background-color: white;
            color: black;
          }
        </style>
      </head>
      <body>
 ";
  multTable($size);

  echo "</body>
  </html>";
?>