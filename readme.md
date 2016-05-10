# University Management System

UMS is a simple University Management System application that allows admin to add department, courses and Teachers. Admin can  Register student, assign course to Teacher, Enroll student in a course, Allocate Classrooms, Save Student Result, Unassign All Courses, Unallocate All Classrooms.

Guest user can see all Departments, Course Statics,  Class Schedule and Room Allocation Information, Student Result.

> UMS is built using Laravel 5.2.* , Bootstrap 3.3.6 and jQuery 2.2.3

### Version
master

### Installation

Clone this repository first-
```sh
$ git clone https://github.com/sadik-s/UMS.git
```

Now cd into UMS-
```sh
$ cd UMS
```

Install composer-
```sh
$ composer install  
```

Duplicate `.env.example` file to `.env` file to create a environment file-
```sh
$ cp .env.example .env
```

Edit `.env` file with with your database credential

Now create database tables by running this command-
```
php artisan migrate
```

Generate a application key
```
php artisan key:generate
```

## Run on server
```
php artisan serve
```
