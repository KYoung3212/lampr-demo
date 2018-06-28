<img align="right" width="150" src="https://github.com/Learning-Fuze/lampr-demo/blob/master/public/dist/php-react.png">

# PHP React - LAMPR Stack Demo

> Starter repo to demonstrate setting up LAMPR stack

### Setup Instructions

> 1. Fork this repo
> 1. Clone your forked copy of this repo
>    - `git clone https://github.com/[Your Username]/lampr-demo.git`
> 1. Change directory into the newly cloned repo
>    - `cd lampr-demo`
> 1. Install dependencies 
>    - `npm install`
> 1. Use MAMP or similar program to start Apache and MySQL servers
>    - Set root directory of server to the `public` folder of this project
>    - Set Apache port to `8000`
>    - Use phpMyAdmin (or similar) to create a database
> 1. Start dev server
>    - `npm start`
> 1. Open a browser and navigate to `localhost:3000` You should see an empty to do list.

### Bundle For Deployment

> 1. Run webpack to bundle files
>    - `npm run bundle`
> 
> **NOTE:** *After bundling and placing on a web server. The `public` folder should be the web root*
