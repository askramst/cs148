<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "top.php";

print '<table>';

    $columns = 8;
   //now print out each record
    $query = 'SELECT pmkStudentId, fldFirstName, fldLastName, fldStreetAddress, fldCity, fldState, fldZip, fldGender '
            . 'FROM tblStudents '
            . 'ORDER BY fldLastName, fldFirstName LIMIT 10 offset 1000' ;
    //$info = $thisDatabaseReader->testquery($query, "", 0, 1, 0, 0, false, false);
    $info2 = $thisDatabaseReader->select($query, "", 0, 1, 0, 0, false, false);
    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }
    // all done
    print '</table>';

include "footer.php";
?>