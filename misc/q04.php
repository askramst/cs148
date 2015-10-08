<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "top.php";

print '<table>';

    $columns = 3;
   //now print out each record
    $query = 'SELECT * FROM tblCourses WHERE fldCourseNumber = "148" AND  fldDepartment = "CS"' ;
    $info = $thisDatabaseReader->testquery($query, "", 1, 1, 4, 0, false, false);
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 4, 0, false, false);
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