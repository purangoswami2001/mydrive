<nav class="main-menu">
    <ul>
        <li>
            <a href="/directory">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                   All Directories
                </span>
            </a>
          
        </li>
        <li class="has-subnav">
            
            <a href="/directory/new_dir/{{(isset($data['Dir_Id']))? $data['Dir_Id'] : '0';}}">
              <i class="material-icons fa ">create_new_folder</i>
                <span class="nav-text">
                    New Folder
                </span>
            </a>
            
        </li>
        
        <li class="has-subnav">
            <a href="/directory/upload_file/{{(isset($data['Dir_Id']))? $data['Dir_Id'] : '0';}}">
                <i class="fa fa-upload fa-2x"></i>
                <span class="nav-text">
                    Upload File
                </span>
            </a>
           
        </li>
        
       
        <li>
            <a href="#" >
               <i class="fa fa-star fa-2x"></i>
                <span class="nav-text">
                    Favoruite
                </span>
            </a>
        </li>
        <li class="has-subnav">
            <a href="#">
                <i class="fa fa-file fa-2x"></i>
                <span class="nav-text">
                    Trash
                </span>
            </a>
            
        </li>
    </ul>
  
    <ul class="logout ">
        <li>
           <a href="/logout">
                 <i class="fa fa-power-off fa-2x"></i>
                <span class="nav-text">
                    Logout
                </span>
            </a>
        </li>  
    </ul>
  </nav>