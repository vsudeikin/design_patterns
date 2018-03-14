<?php
use Observer\JobPost;
use Observer\JobPostings;
use Observer\JobSeeker;

require_once __DIR__ . "/../../vendor/autoload.php";

// Создаём подписчиков
$johnDoe = new JobSeeker('John Doe');
$janeDoe = new JobSeeker('Jane Doe');

// Создаём публикатора и прикрепляем подписчиков
$jobPostings = new JobPostings();
$jobPostings->attach($johnDoe);
$jobPostings->attach($janeDoe);

// Добавляем новую вакансию и смотрим, будут ли уведомлены подписчики
$jobPostings->addJob(new JobPost('Software Engineer'));

// Output
// Hi John Doe! New job posted: Software Engineer
// Hi Jane Doe! New job posted: Software Engineer