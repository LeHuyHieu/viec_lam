<?php
session_start();
// print_r($_SESSION['user']);die;
require_once('../../lib/connect.php');
if (isset($_POST['save_education'])) {
    $education_school = $_POST['education_school'];
    $education_level = $_POST['education_level'];
    $start_education_date = $_POST['start_education_date'];
    $end_education_date = $_POST['end_education_date'];
    $education_notes = $_POST['education_notes'];

    if (isset($_POST['education_id'])) {
        $education_id = $_POST['education_id'];
        $sql = "UPDATE education SET education_school = '$education_school', education_level = '$education_level', start_education_date = '$start_education_date', end_education_date = '$end_education_date', education_note = '$education_notes' where id = '$education_id'";
    } else {
        $user_id = $_POST['user_id'];
        $_SESSION['user']['education_id'] = $user_id;
        $sql = "INSERT INTO education (user_id, education_school, education_level, start_education_date, end_education_date, education_note, created_at, updated_at) VALUES ('$user_id' , '$education_school', '$education_level', '$start_education_date', '$end_education_date', '$education_notes', NOW(), NOW())";
    }
    if ($conn->query($sql) === true) {
        if (!isset($education_id)) {
            $sql = "SELECT id FROM education order by id desc limit 1";
            $data = getData($sql);
            $education_id = $data[0]['id'];
        }
        header('location:./get-education-data.php?id=' . $education_id);
        exit();
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['save_experience'])) {
    $experience_employer = $_POST['experience_employer'];
    $experience_job = $_POST['experience_job'];
    $start_experience_date = $_POST['start_experience_date'];
    $end_experience_date = $_POST['end_experience_date'];
    $experience_notes = $_POST['experience_notes'];

    if (isset($_POST['experience_id'])) {
        $experience_id = $_POST['experience_id'];
        $sql = "UPDATE experience SET experience_employer = '$experience_employer', experience_job = '$experience_job', start_experience_date = '$start_experience_date', end_experience_date = '$start_experience_date', experience_note = '$experience_notes' where id = '$experience_id'";
    } else {
        $user_id = $_SESSION['user']['id'];
        $_SESSION['user']['experience_id'] = $user_id;
        $sql = "INSERT INTO experience (user_id, experience_employer, experience_job, start_experience_date, end_experience_date, experience_note, created_at, updated_at) VALUES ('$user_id' , '$experience_employer', '$experience_job', '$start_experience_date','$end_experience_date', '$experience_notes', NOW(), NOW())";
    }
    if ($conn->query($sql) === true) {
        if (!isset($experience_id)) {
            $sql = "SELECT id FROM experience order by id desc limit 1";
            $data = getData($sql);
            $experience_id = $data[0]['id'];
        }
        header('location:./get-experience-data.php?id=' . $experience_id);
        exit();
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['save_action'])) {
    $name_action = $_POST['name_action'];
    $note_action = $_POST['note_action'];
    $start_action_date = $_POST['start_action_date'];
    $end_action_date = $_POST['end_action_date'];

    if (isset($_POST['action_id'])) {
        $action_id = $_POST['action_id'];
        $sql = "UPDATE actions SET name_action = '$name_action', note_action = '$note_action', start_action_date = '$start_action_date', end_action_date = '$end_action_date' where id = '$action_id'";
    } else {
        $user_id = $_SESSION['user']['id'];
        $_SESSION['user']['action_id'] = $user_id;
        $sql = "INSERT INTO actions (user_id, name_action, note_action, start_action_date, end_action_date, created_at, updated_at) VALUES ('$user_id' , '$name_action', '$note_action', '$start_action_date','$end_action_date', NOW(), NOW())";
    }
    if ($conn->query($sql) === true) {
        if (!isset($action_id)) {
            $sql = "SELECT id FROM actions order by id desc limit 1";
            $data = getData($sql);
            $action_id = $data[0]['id'];
        }
        header('location:./get-action-data.php?id=' . $action_id);
        exit();
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['save_interest'])) {
    $interest = $_POST['interest'];

    if (isset($_POST['interest_id'])) {
        $interest_id = $_POST['interest_id'];
        $sql = "UPDATE interest SET interest = '$interest' where id = '$interest_id'";
    } else {
        $user_id = $_SESSION['user']['id'];
        $_SESSION['user']['interest_id'] = $user_id;
        $sql = "INSERT INTO interest (user_id, interest, created_at, updated_at) VALUES ('$user_id' , '$interest', NOW(), NOW())";
    }
    if ($conn->query($sql) === true) {
        if (!isset($interest_id)) {
            $sql = "SELECT id FROM interest order by id desc limit 1";
            $data = getData($sql);
            $interest_id = $data[0]['id'];
        }
        header('location:./get-interest-data.php?id=' . $interest_id);
        exit();
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['save_additional_information'])) {
    $additional_information = $_POST['additional_information'];

    if (isset($_POST['additional_information_id'])) {
        $additional_information_id = $_POST['additional_information_id'];
        $sql = "UPDATE additional_information SET additional_information = '$additional_information' where id = '$additional_information_id'";
    } else {
        $user_id = $_SESSION['user']['id'];
        $_SESSION['user']['additional_information'] = $user_id;
        $sql = "INSERT INTO additional_information (user_id, additional_information, created_at, updated_at) VALUES ('$user_id' , '$additional_information', NOW(), NOW())";
    }
    if ($conn->query($sql) === true) {
        if (!isset($additional_information_id)) {
            $sql = "SELECT id FROM additional_information order by id desc limit 1";
            $data = getData($sql);
            $additional_information_id = $data[0]['id'];
        }
        header('location:./get-additional-information-data.php?id=' . $additional_information_id);
        exit();
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['add_skills'])) {
    $t_anh = $_POST['t_anh'];
    $t_trung = $_POST['t_trung'];
    $word = $_POST['word'];
    $excel = $_POST['excel'];
    $career_goals = $_POST['career_goals'];
    
    if (isset($_POST['skill_id']) && $_POST['skill_id'] != '') {
        $skill_id = $_POST['skill_id'];
        $sql = "UPDATE skills SET t_anh = '$t_anh', t_trung = '$t_trung', word = '$word', excel = '$excel', career_goals = '$career_goals' where id = '$skill_id'";
    } else {
        $user_id = $_SESSION['user']['id'];
        $_SESSION['user']['skill_id'] = $user_id;
        $sql = "INSERT INTO skills (user_id, t_anh, t_trung, word, excel, career_goals, created_at, updated_at) VALUES ('$user_id' , '$t_anh', '$t_trung', '$word','$excel', '$career_goals', NOW(), NOW())";
    }
    if ($conn->query($sql) === true) {
        header('location:./add_resumer.php');
        exit();
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}

// die;
if (isset($_POST['add_resumer'])) {
    $name                   = $_POST['name'];
    $city_id                = $_POST['city_id'];
    $category_id            = $_POST['category_id'];
    $email                  = $_POST['email'];
    $professional_title     = $_POST['professional_title'];
    $avatar                 = $_FILES['avatar'];
    $content                = $_POST['content'];
    $skill                  = $_POST['skill'];
    $target_dir = "/images/";

    if (isset($_FILES['avatar']['tmp_name']) && $_FILES['avatar']['tmp_name']) {
        $avatar = $target_dir . basename($_FILES['avatar']['name']);
        move_uploaded_file($_FILES['avatar']['tmp_name'], '..' . $avatar);
    } else {
        $avatar = '';
    }

    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        if (strlen($avatar)) {
            $sql = "UPDATE users SET avatar = '$avatar', name = '$name', city_id = '$city_id', category_id = '$category_id', user_email = '$email', profession = '$professional_title', content = '$content', skills = '$skill' where id = '$user_id'";
        } else {
            $sql = "UPDATE users SET name = '$name', city_id = '$city_id', category_id = '$category_id', user_email = '$email', profession = '$professional_title', content = '$content', skills = '$skill' where id = '$user_id'";
        }
    }

    if ($conn->query($sql) === true) {
        $user_email = $_SESSION['user']['user_email'];
        $sql = "SELECT * FROM users where user_email = '$user_email'";
        $users = getData($sql);
        $_SESSION['user'] = $users[0];
        header('location:add_resumer.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
