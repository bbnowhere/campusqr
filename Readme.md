## Installation User Guide

### Prerequisite 

Step 1. Install Node.js of the version v14.12.0 on your system before running the complete code. The project will not build on the latest node.js. 

Step 2. Install android studio on your system along with Java and configure the JAVA environment variable and android SDK path as per your operation system.
         
         Reference guide for installation of Android Studio is given in the following URL 
         ->  https://developer.android.com/studio/install
        
        
        Reference guide for installation of Java and setting up path is given in the following URL -> 
        https://docs.oracle.com/cd/E19182-01/821-0917/inst_jdk_javahome_t/index.html#:~:text=To%20set%20JAVA_HOME%2C%20do%20the,6.0_02.

Step 3: Extract the project into the project folder and to generate an signed app using the below command.

         Reference : https://instamobile.io/android-development/generate-react-native-release-build-android/

         cd android && ./gradlew assembleRelease
         
Step 4: Navigate to the below path after successfully building an app.

        ~/projects/reactnative/campusqr/android/app/build/outputs/apk/release 
        
        and copy the app-universal-release.apk file to your phone and install an app.
        
### Running an App

        After an installation, To scan the QR code please use the QR codes stored in the folder name QRCODES. QRCodes images stored in the folder are configured in the server databases. The App will not detect the QR codes other than which are stored in the folder. 
     

### Complete code of the project 
        Final code is kept on the drive storage with file name -> campusqr-whole-android-code.tar.gz -> 
        
        https://drive.google.com/file/d/1ydbd7sS2wlo0gWZs9HBUYlwzwf0zV6_b/view?usp=sharing


