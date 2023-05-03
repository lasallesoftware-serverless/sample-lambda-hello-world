<?php

/**
 * This file is part of the Lasalle Software Serverless "Hello World" sample PHP Lambda function.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright  (c) 2021-2023 The South LaSalle Trading Corporation
 * @license    http://opensource.org/licenses/MIT
 * @author     Bob Bloom
 * @email      bob.bloom@lasallesoftware.ca
 * @link       https://phpserverlessproject.com
 * @link       https://packagist.org/packages/lasallesoftware-serverless/sample-lambda-hello-world
 * @link       https://github.com/lasallesoftware-serverless/sample-lambda-hello-world
 *
 */

if (isset($_SERVER['LAMBDA_TASK_ROOT'])) {
    // For Lambda
    require_once './../vendor/autoload.php';
} else {1
    // For your local development
    require_once '/var/task/vendor/autoload.php';
}

echo "<hr /><h1>Hello World!</h1><hr />";

echo 'This is "sample-lambda-hello-world".';