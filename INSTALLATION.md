# Installation

<br>

To use our beloved PHP with Lambda from the command line, we need to use the [Bref project's](https://bref.sh) PHP plugin for the [Serverless Framework](https://serverless.com).


The Serverless Framework is free and open source software written in NodeJS to develop and deploy serverless apps to (among others) the AWS serverless platform.

<br>
<hr>

## (1) Install NodeJS

<br>

See the [NodeJS website](https://nodejs.org/) for info. 

<br>
<hr>

## (2) Install the Serverless Framework

<br>

Install the Serverless Framework ([getting-started docs](https://www.serverless.com/framework/docs/getting-started)):

```php
npm install -g serverless
```

<br>

---
## (3) Set up your IAM user in your AWS Console

<br>

- log into your AWS console

- go to the IAM dashboard

- in the left menu bar, click "Users". Add a new user. I suggest this name: "lambda_functions_with_serverless_framework"

- attach the policy "AdministratorAccess" --> do <u>NOT</u> use this user in production!

- do <u>not</u> assign console management access. Programmatic access only

- keep the window that has your Access Keys open for reference

<br>

---
## (4) Create your local AWS credentials file

<br>

AWS needs to authenticate you. And, AWS needs to know what account you want to use.

Since you are going to deploy your Lambda function from your local CLI, your credentials will be stored your your local ".aws/credentials" file.

Run this command from your command line:

```php
serverless config credentials --provider aws --key <access key> --secret <secret>
```

The file ".aws/credentials" should now exist, and contain your AWS keys. 

<br>
<hr>

## (5) Create your S3 Bucket for Lambda Functions

<br>

I recommend that you dedicate an S3 bucket for your Lambda functions:

- reduces the clutter of your "root" S3 listing in the console
- helps visually to find folders that are for your Lambda function
- makes it easy to assign an AWS region to your folder. 

<br>

<em>Your Lambda function must be in the same AWS region as your S3 bucket.</em>

<br>

- go to your S3 dashboard.

- at the main (right) area, click the "Create bucket" button at the top 

- name your bucket name something like "lambda-functions-with-serverless-framework-<your-aws-account-number>"

- assign your new bucket to an AWS region

- keep this window open for later reference.

<br>
<hr>

## (6) Clone this repo on your local computer

<br>

- click the green "Code" button at the top this repo's "home" page

- use your favourite way of cloning

<br>
<hr>

## (7) Run "composer install"

<br>

This is for:
- the Lambda function, which is written in PHP
- the Bref PHP plugin for the Serverless Framework

```php
composer install
```

<br>
<hr>

## (8) Modify the serverless.yml file

<br>

The "serverless.yml" is for the Serverless Framework. 

This file will not work out-of-the-box. You need to modify it.

To modify the serverless.yml file, please follow the inline comments.

<br>
<hr>

## (9) Modify the src/Handler.php, and/or other src/* files

<br>

The src/Handler.php, or src/Form.php, or other src/*.php file, may have vars for you to set correctly. 

Please follow the inline comments.

<br>
<hr>

## (10) Deploy your code to the AWS serverless platform

<br>

At your command line, run:

```php
serverless deploy
```

- deployment may take a few minutes
- when deployment concludes, copy the endpoint URL
- the endpoint URL will look like "https://123ab12abc.execute-api.us-east-1.amazonaws.com"
- paste the endpoint URL into your browser

<br>
<hr>

## (11) Look at your AWS Console

<br>

See your new Lambda function in the AWS Console:
- Lambda dashboard
- S3 dashboard
- CloudFormation dashboard
- API Gateway dashboard
- IAM dashboard
- sometimes the SES, SNS, and other dashboards
