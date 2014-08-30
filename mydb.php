<?php
    $con = mysqli_connect("104.131.195.37","freya","jingshuangcheng");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    //create database
    $sql = "CREATE DATABASE mydb";
    if(mysqli_query($con,$sql)){
        echo "Database mydb created successfully";
    }
    else{
        echo "Error creating database: " . mysqli_error($con);
    }
    
    $account = "CREATE TABLE Account(ID INT, account_holder varchar(30), users varchar(30), primary key (ID), foreign key (account_holder) REFERENCES Users(userid), foreign key (users) REFERENCES Users)";
    if (mysqli_query($con, $account)){
        echo "Table Account created successfully";
    }
    else{
        echo "Error creating table: " . mysqli_error($con);
    }
    
    $users = "CREATE TABLE Users(userid varchar(30), password INT, firstname varchar(30), lastname varchar(30), type varchar(9), PRIMARY KEY (userid))";
    if (mysqli_query($con, $users)){
        echo "Table Users created successfully";
    }
    else{
        echo "Error creating table: " . mysqli_error($con);
    }
    
    $users = "CREATE TABLE Users(userid varchar(30), password INT, firstname varchar(30), lastname varchar(30), type varchar(9), PRIMARY KEY (userid))";
    if (mysqli_query($con, $users)){
        echo "Table Users created successfully";
    }
    else{
        echo "Error creating table: " . mysqli_error($con);
    }
    
    
    $errors = "CREATE TABLE Errors(id varchar(30), severity INT, text varchar(65535), PRIMARY KEY (id))";
    if (mysqli_query($con, $errors)){
        echo "Table Errors created successfully";
    }
    else{
        echo "Error creating table: " . mysqli_error($con);
    }
    
    $comments = "CREATE TABLE Comments(id varchar(30), errorid varchar(30), text varchar(30), files varchar(65535), time_created varchar(2000), PRIMARY KEY (id), FOREIGN KEY (errorid) references Errors(id))";

    if (mysqli_query($con, $comments)){
        echo "Table Comments created successfully";
    }
    else{
        echo "Error creating table: " . mysqli_error($con);
    }


?>
