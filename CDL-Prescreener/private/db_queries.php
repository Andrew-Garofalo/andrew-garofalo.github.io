<?php

function insertPersonalInformation($values) {
    $stmt = mysqli_prepare($db, "INSERT INTO personal-information(username, age, city, state, gender, cdl-app-holder, med-cert-deny)
    VALUES(?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt, "iisssss", $varName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $result);

    //DONT KNOW IF THIS WORKS FOR PREPARED STMTS
    // // For INSERT statements, $result is true/false
    if($result) {
        
        return true;
      } else {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
      }
}

function insertSurgeryMedication($values) {
    $stmt = mysqli_prepare($db, "INSERT INTO surgery-medication(username, surgery-name, surgery-description, medication-name, 
    medication-category)
    VALUES(?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt, "issss", $varName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $result);
    
    //dont know if this works for prepared stmts
    // // For INSERT statements, $result is true/false
    if($result) {
        return true;
      } else {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
      }
}

function insertConditionsChecklist($values) {
    $stmt = mysqli_prepare($db, "INSERT INTO conditions-checklist(username, head-brain, seisures-epilepsy, eye, 
    ear-hearing, heart-problems, heart-procedures, high-bp, high-cholesterol, breathing, lung, kidney, digestive, 
    blood-sugar, insulin, mental-health, fainting, dizz-head-numb-ting-mem, weight-loss, stroke-paralysis, 
    missing-limited-limb, neck-back, bone-mus-joing-nerve, bleeding, cancer, chronic-diseases, sleep, sleep-test 
    hospital, broken-bone, tobacco, alcohol, illegal-substance, fail-drug-test) 33
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt, "isssssssssssssssssssssssssssssssss", $varName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $result);

    //DONT KNOW IF THIS WORKS FOR PREPARED STMTS
    // // For INSERT statements, $result is true/false
    if($result) {
        
        return true;
      } else {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
      }
}

function insertConditionComments($values) {
    $stmt = mysqli_prepare($db, "INSERT INTO condition-comments(username, other-conditions, conditions-comments)
    VALUES(?,?,?,?,?)");
    mysqli_stmt_bind_param($stmt, "issss", $varName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $result);
    
    //dont know if this works for prepared stmts
    // // For INSERT statements, $result is true/false
    if($result) {
        return true;
      } else {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
      }
}

