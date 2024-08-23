pipeline {
    agent any
    triggers {
        githubPush()
    } 
    environment {
    	DOCKERHUB_USER = credentials('dockerhub-username')
        DOCKERHUB_PASS = credentials('dockerhub-password')
    }



    stages {
        stage('Checkout') {
            steps {
                // Get some code from a GitHub repository
                git 'https://github.com/abdulp07-git/week11.git'

               
            }

        }
        
        stage("Build docker image"){
            steps {
                script {
                    def dockerImage = "abdulp07/nginx-php"
                    def tag = "V${BUILD_NUMBER}"
                    def fullImageName = "${dockerImage}:${tag}"
                    sh "docker build -t ${fullImageName} ."
                }
            }
            
        }
        
        
        stage("Push Docker Image to Docker Hub"){
            steps {
                script {
                    def dockerImage = "abdulp07/nginx-php"
                    def tag = "V${BUILD_NUMBER}"
                    def fullImageName = "${dockerImage}:${tag}"
                    
                    
                    sh '''
                    #!/bin/bash
                    
         echo $DOCKERHUB_PASS | docker login -u $DOCKERHUB_USER --password-stdin
                    '''

                    sh "docker push ${fullImageName}"
                }
            }
        
        
        
            post {
                always {
                    sh 'docker logout'
                }
            }
        }


        stage("Clean up local Docker image") {
            steps {
                script {
                    def dockerImage = "abdulp07/nginx-php"
                    def tag = "V${BUILD_NUMBER}"
                    def fullImageName = "${dockerImage}:${tag}"
                    
                    sh "docker rmi ${fullImageName}"
                }
            }
        }



        
    }
}
