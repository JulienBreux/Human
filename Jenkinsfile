node {
    stage "Checkout"
        checkout scm
        sh "git rev-parse HEAD > .git/commit-id"
        def commit_id = readFile('.git/commit-id').trim()

        stage "Build"
        def app  = docker.build 'julienbreux/human'

        app.inside {
            stage "Test"
                sh "phpunit --log-junit reports/phpunit/phpunit.xml"
                junit "reports/**/*.xml"
        }

        docker.withRegistry('https://index.docker.io/v1/', 'docker-registry') {
            stage "Publish"
                app.push 'latest'
                app.push "${commit_id}"
        }

    stage "Cleanup"
        deleteDir()
}
