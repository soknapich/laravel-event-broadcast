pipeline {
    agent {
        docker {
            image 'php:8.2-cli'  // or any other PHP image
        }
    }

    stages {
        stage('Check PHP') {
            steps {
                sh 'php -v'
            }
        }
    }
}
