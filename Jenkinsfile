pipeline {
    agent any

    environment {
        COMPOSER_CACHE_DIR = "$HOME/.composer/cache"
    }

    stages {
        stage('Clone Repository') {
            steps {
                echo 'Repository already cloned by Jenkins'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }

        stage('Run Tests') {
            steps {
                sh './vendor/bin/phpunit'
            }
        }
    }
}
