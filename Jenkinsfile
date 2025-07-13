pipeline {
    agent {
        docker {
            image 'composer:2'
        }
    }

    stages {
        stage('Test Composer') {
            steps {
                sh 'composer --version'
            }
        }
    }
}
