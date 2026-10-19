
pipeline {
    agent any

    environment {
        IMAGE_NAME = 'renanthera/hibyra'
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Validate Project') {
            steps {
                bat '''
                    if not exist Dockerfile (
                        echo ERROR: Dockerfile tidak ditemukan
                        exit /b 1
                    )
                    if not exist compose.yaml (
                        echo ERROR: compose.yaml tidak ditemukan
                        exit /b 1
                    )
                    if not exist composer.json (
                        echo ERROR: composer.json tidak ditemukan
                        exit /b 1
                    )
                    echo File utama Hibyra tersedia.
                '''
            }
        }

        stage('Check Docker') {
            steps {
                bat 'docker version'
            }
        }

        stage('Build Docker Image') {
            steps {
                bat 'docker build -t %IMAGE_NAME%:%BUILD_NUMBER% .'
            }
        }

        stage('Push Docker Image') {
            steps {
                withCredentials([
                    usernamePassword(
                        credentialsId: 'dockerhub-credentials',
                        usernameVariable: 'DOCKER_USER',
                        passwordVariable: 'DOCKER_TOKEN'
                    )
                ]) {
                    bat '''
                        powershell -NoProfile -NonInteractive -Command "$env:DOCKER_TOKEN | docker login --username $env:DOCKER_USER --password-stdin; if ($LASTEXITCODE -ne 0) { exit $LASTEXITCODE }"
                        if errorlevel 1 exit /b 1

                        docker push %IMAGE_NAME%:%BUILD_NUMBER%
                        if errorlevel 1 exit /b 1

                        docker tag %IMAGE_NAME%:%BUILD_NUMBER% %IMAGE_NAME%:latest
                        if errorlevel 1 exit /b 1

                        docker push %IMAGE_NAME%:latest
                        if errorlevel 1 exit /b 1
                    '''
                }
            }
        }
    }

    post {
        always {
            echo 'Pipeline Hibyra selesai dijalankan.'
        }
    }
}
