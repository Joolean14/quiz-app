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

# Basic flows

![](/quiz-app-flows.drawio.png)

# Tech-Stack

- Laravel
- MySQL
- PHPunit
- Linux
- Blade
- Bootstrap

# Requirements engineering

### User Stories
- **Definition**: User stories are short, simple descriptions of a feature or requirement told from the perspective of an end-user. They typically follow the format: "As a [type of user], I want [some action], so that [some outcome]."
- **Purpose**: User stories capture user needs in a simple and straightforward manner, focusing on what the user wants to achieve and why.
- **Creating User Stories**:
  - Identify the types of users (personas) who will interact with your software.
  - Talk to stakeholders, customers, or end-users to understand their needs.
  - Write user stories based on these discussions. For example:
    - "As a student, I want to submit assignments online, so that I don't have to bring physical copies."
    - "As a customer, I want to track my order, so that I know when it will be delivered."
- **Refining User Stories**:
  - Break down large user stories into smaller, manageable tasks.
  - Define acceptance criteria to clarify the expected outcome for each story.
  - Prioritize user stories based on business goals and user needs.

### Use Cases
- **Definition**: Use cases are detailed scenarios that describe how users interact with the system to achieve specific goals. They often include a step-by-step sequence of actions.
- **Purpose**: Use cases help to map out user interactions with the software, providing a more detailed view of user requirements and system behavior.
- **Creating Use Cases**:
  - Define the actors (users or systems) involved in the interaction.
  - Describe the goal or purpose of the use case.
  - Outline the main scenario or flow, detailing the steps involved.
  - Include variations or alternate flows to cover edge cases or exceptions.
- **Example**:
  - Use Case: "Add a Product to Cart"
    - Actor: Customer
    - Goal: Add a product to the shopping cart
    - Steps:
      1. Customer navigates to the product page.
      2. Customer clicks "Add to Cart."
      3. The product is added to the shopping cart.
    - Alternate Flows:
      - If the product is out of stock, show an appropriate message.
      - If the customer is not logged in, prompt them to log in or register.

# NFRs

## Find free responsive Dashboard blade templates

Implement free blade templates.

> Try Sneat

## Make proyect run locally

Install Laravel 10 and run locally.

## Design database

Design the database in SQL.

## Implement database

Implement the database

## Create CRUDs

Create CRUD operations for SQL tables.

## Call Laravel API with Laravel's HTTP client not web routes

Call the API from the frontend using Laravel's HTTP client.

## Test CRUDs with Bash script

Write a Bash script to test CRUD using cURL

## Result list Read

Show results from all applicants. 

> Highlight passed applications
> Show date and time when quiz was taken

## Grade the test

Compare applicants answers with answers column to find the score. 

## Apply security measures implemented by Laravel out of the box

### 1. **Use the Latest Version of Laravel**
Keeping Laravel and its dependencies updated ensures that you're protected against known vulnerabilities. Regularly check for updates and security patches.

### 2. **Environment Configuration**
- **.env File**: Ensure your `.env` file is not publicly accessible. It contains sensitive information like database credentials and API keys. This file should be included in your `.gitignore` and never committed to source control.
- **APP_ENV and APP_DEBUG**: Set `APP_ENV` to `production` and `APP_DEBUG` to `false` in production environments to avoid revealing sensitive information through debug output.

### 3. **Secure Authentication and Authorization**
- **Password Hashing**: Laravel uses Bcrypt for password hashing by default. Always store hashed passwords, never plain text.
- **Multi-Factor Authentication (MFA)**: Consider implementing MFA for additional security.
- **Authorization Policies and Gates**: Use Laravel's policies and gates to control user access to different parts of your application.

### 4. **Protection Against Cross-Site Scripting (XSS)**
- **Blade Templating**: Laravel's Blade templating engine automatically escapes data by default, protecting against XSS attacks.
- **Sanitize User Input**: Always validate and sanitize user inputs, especially when rendering them on the frontend.

### 5. **Protection Against Cross-Site Request Forgery (CSRF)**
- **CSRF Tokens**: Laravel includes built-in protection against CSRF attacks. Ensure that your forms include CSRF tokens, and validate them on the server side.

### 6. **Protection Against SQL Injection**
- **Query Builder and Eloquent ORM**: Use Laravel's query builder or Eloquent ORM to prevent SQL injection. Avoid raw SQL queries unless absolutely necessary, and use parameterized queries when you do.

### 7. **Secure File Uploads**
- **File Validation**: Validate uploaded files based on their type, size, and other criteria.
- **Storage Outside Web Root**: Store uploaded files outside the public web root to avoid direct access by users.
- **Use Unique Filenames**: Generate unique filenames for uploaded files to prevent overwriting and ensure predictability.

### 8. **Protection Against Session Hijacking**
- **Session Management**: Use secure session management practices, including HTTPS-only cookies, secure session storage, and session timeout policies.
- **Session Regeneration**: Regenerate session IDs after login to prevent session fixation.

### 9. **Rate Limiting and Throttling**
- **Rate Limiting**: Implement rate limiting to protect against denial-of-service (DoS) attacks and brute-force attacks.
- **Throttle User Actions**: Throttle specific user actions, such as login attempts, to prevent abuse.

### 10. **HTTPS and SSL/TLS**
- **Enforce HTTPS**: Ensure that your application uses HTTPS to encrypt data in transit. Consider redirecting HTTP requests to HTTPS.
- **SSL/TLS Configuration**: Use strong SSL/TLS configurations, ensuring proper certificate validation.

### 11. **Security Headers**
- **Content Security Policy (CSP)**: Implement CSP to control which sources are allowed to run scripts or load content.
- **Other Security Headers**: Consider adding headers like `X-Content-Type-Options`, `X-Frame-Options`, and `X-XSS-Protection` to improve security.

### 12. **Logging and Monitoring**
- **Error Logging**: Log errors and monitor them for signs of potential attacks.
- **Audit Logging**: Keep track of important user actions and changes to critical data.
- **Monitoring Tools**: Use monitoring tools to detect unusual patterns or anomalies.

## Refactor

Look back at what could have been done better and refactor.

## Deploy proyect

Deploy proyect to Latin American Hosting or Railway.

# Use cases

## Login to app

- Actor: Applicants & Teacher
- Goal: Login to admin panel or to take test dashboard.
- Steps:
    1. Go to the quiz-app URL
    1. Actor enters credentials
    1. Actor logs in
- Alternate flows:
    - If the credentials are wrong, a message is displayed, or any validation specifications for that matter.
    - If the actor is an applicant, forward to take test dashboard.
    - If the actor is a teacher, take them to admin panel.
    - If the applicant has already taken the test forward to login screen

> One Attempt only

## Quiz Creator

- Actor: Teacher
- Goal; Create questions for the applicants quiz
- Steps: 
    1. Login
    1. Click on Quiz creator on Dashboard
    1. Display all previously created questions. If no questions have created display corresponding message.
    1. Click on edit of each question takes you to edit form.
    1. Edit form can edit prompt, options and correct answer.
- Alternate flows:
    1. Go back to dashboard

## Applicant creation

- Actor: Teacher
- Goal; Create applicants
- Steps: 
    1. Login
    1. Click on Create Applicants Dashboard
    1. Display all previously created Applicants. If no applicants have created display corresponding message.
    1. Click on edit of each applicant takes you to edit form.
    1. Edit form can edit email and password with automatic safe password generation.
- Alternate flows:
    1. Go back to dashboard

## Take the Quiz

- Actor: Applicants
- Goal: Answer the questions defined by the teacher to see if he/she continues to the next application filter.
- Steps: 
    1. Login
    1. Click on take test in applicant's dashboard
    1. The timer starts in the background
    1. Applicants answer the multiple choice questions before the timer ends.
- Alternate flows:
    - The timer ends and the answers are automatically sent to the server
    - Applicant finishes answering the questions before the timer ends and sends them by clicking on the button
    - Applicant leaves the app, closes window or action of some sort

> Timer
> Alert when quiz is not fully filled and applicant clicks send button

## Disclaimer


> Signup will not be implemented due to the use of a Mailer feature, which is out of scope for this proyect. The applicant is created with its email and the app generates a safe password for the Teacher. The credentials are later sent to the applicant's email manually. (Loosely based on cPanel's email account generator).
>
> This also means that the Teacher is created first via the DB to then utilize the app's GUI for its intended use.

### I understand that this app can be significantly improved, but to demonstrate my skills for job hunting, I chose to go with this design.

# API mindset implementation

- Inputs & Outputs
- Implementation

# Why?

> Programming is asking questions.

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
  