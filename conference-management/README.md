# Conference Management Application
This is a group intern project.


## Getting Started

Follow these steps to **set up** and use the Conference Management Application:

1. Clone or download project from https://github.com/DevRangersBG/conference-management.git
   
 ![1-step](https://github.com/DevRangersBG/conference-management/assets/24313156/81dd8fe6-204d-450a-b3d1-1867596672f8)
 
2. Copy **.env.example** file and rename it as **.env**
3. Set up a **MySQL database** and configure the database connection in the **.env** file.
4. Open the console/terminal into the root directory of the project
5. Run following commands for installing dependencies (located in `composer.json` and `package.json`)
  - `composer install`
  - `npm install`
  - if above are not recognized in your terminal you have to install them and Restart VSCode or terminal (PC Restart if those don't work)
     - git: [Git for Windowns 64bit](https://github.com/git-for-windows/git/releases/download/v2.43.0.windows.1/Git-2.43.0-64-bit.exe)
     - npm: [Node for Windows 64bit](https://nodejs.org/dist/v20.11.1/node-v20.11.1-x64.msi)
     - composer: [Composer for Windows](https://getcomposer.org/Composer-Setup.exe)
       - you need PHP installed ([XAMP](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe) to finish the Composer installation)
       - you'll also need to edit `php.ini` to uncomment the line `;extension zip` to `extension zip` (Line:962 if 
         you use Notepad++ for example) you can find the file under "~\xampp\php\php.ini" (usually installed in C:\) 
         or via the XAMPP Control Panel - Next to "Apache" click the button "Config" and select PHP "(php.ini)"
6. Run `php artisan key:generate`
7. Run the database migrations to create the required tables. Use `php artisan migrate` command
8. Make sure you’ve started your local server
  - Configuring your local Laravel development environment(Homstead(Vagrant), Valet(macOS), XAMPP, Docker)
  - To start Laravel Development server run `php artisan serve` command
  - You will also need to be running `npm run dev` command, can be on a second Terminal (inside VSCode)
9. Open the application in the browser

## Creating a separate Branch 
   **(DO NOT Commit to Main branch, if you break it you fix it)**

1. Find the project root directory and open it into "Git Bash" (you should already have Git installed to have cloned this project)
  - The instructions where to have it cloned under `C:\xamp\htdocs\` (ignore my path in the screenshot)
  - Right-click and choose `Open Git Bash here`
    
![Git0](https://github.com/DevRangersBG/conference-management/assets/4021443/f9ac260d-c974-45a5-aff1-54fc11d53d2d)

2. This opens your Git Bash CLI with the correct project directory 
(notice the branch is at the end in parenthesis (main))
  - We should not work on main branch so we have to create our own branch and check it out
  - We create a new branch with the command `git branch <name_of_branch>` (The name should be your first name dash your team)
  - Then we jump on the new branch with command `git checkout <name_of_branch>` (in the example the branch is 
    "stoyan-backend")
    
![Git3](https://github.com/DevRangersBG/conference-management/assets/4021443/342dd8cc-8738-4af4-ac59-3c7da03a1775)

3. Make sure any `git commit` and `git push` you do are on your own Branch for now! (in the example, the branch is named
   "stoyan-backend")!

