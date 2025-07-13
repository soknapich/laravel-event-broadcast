pipeline {
    agent {
        docker {
            image 'composer:2' // uses official Composer image with PHP preinstalled
        }
    }

    stages {
        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }

        stage('Run Tests') {
            steps {
                sh 'vendor/bin/phpunit'
            }
        }
    }
}
