# Quiz App

This app is a study project aimed at developing a tool for a local college to streamline the initial filtering of applicants. It helps save time by identifying applicants who meet the basic requirements, reducing the need for time-consuming one-on-one sessions with those who do not meet these requirements at an early stage.

The purpose of this file is to follow a friend's advice to design software with a focus on structuring all underlying concepts before diving into implementation. By doing so, I aim to save time by avoiding unforeseen pitfalls.

# Users

- Applicants
- Teacher

# Scope

This small project is designed to help a junior developer understand the entire scope of the software development process. It also showcases my approach to solving problems that arise with the development of any solution.

My main focus will be backend development. The frontend is just there to make it useful for the local college to use, so for simplicity's sake I will use Blade and responsive templates I find online.

I will however focus on clean code, TDD, and the best development practices known to me at the moment.

I plan to deploy it in a server when all the features are developed.

Frontend wireframe is availble in this repo as a pdf in the root folder.

# Database

![](/quiz-app-db.drawio.png)


# TDD

- **Smoke Test**: A basic test to check if the app is functioning at a high level, ensuring no critical failures.
- **Form Validation**: Tests to verify that form inputs meet the required rules and constraints.
- **Authentication**: Tests to ensure users can log in and log out correctly.
- **Authorization**: Tests to confirm that users have the appropriate access to resources based on their roles.
- **Re-directs**: Tests to ensure the app redirects users to the correct pages or URLs under specific conditions.
- **End-to-End Tests**: These simulate real-world scenarios to ensure the entire system functions as intended. They typically involve user flows and interactions with the app.
- **Database Tests**: Tests to ensure database interactions work correctly, covering CRUD (Create, Read, Update, Delete) operations.
- **Error Handling Tests**: Tests to verify that the app handles errors gracefully, with proper messaging and recovery mechanisms.
- **Security Tests**: These tests focus on the app's security, checking for vulnerabilities like SQL injection, cross-site scripting (XSS), and others.

# Basic flows

![](/quiz-app-flows.drawio.png)

# Tech-Stack

- Laravel
- MySQL
- PHPunit
- Linux
- Blade
- Bootstrap

# Features

- Login
    - Form validation
    - If the applicant has already taken the test show in login screen


- Quiz
    - Timer
    - Multiple-choice
    - One attempt only

- Auto-grade

- Quiz creator

- Results list
    - Highlight passed applicants
    - Show date when quiz was taken

- Applicant creation with safe password generation.


> Signup will not be implemented due to the use of a Mailer feature, which is out of scope for this proyect. The applicant is created with its email and the app generates a safe password for the Teacher. The credentials are later sent to the applicant's email manually. (Loosely based on cPanel's email account generator).
>
> This also means that the Teacher is created first via the DB to then utilize the app's GUI for its intended use.

### I understand that this app can be significantly improved, but to demonstrate my skills for job hunting, I chose to go with this design.