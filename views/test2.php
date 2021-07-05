<script type="text/javascript" src="../js/script.js"></script>
<link rel='stylesheet' type='text/css' href='../css/test2.css'>

<!-- <style>
    .table {
        display: flex;
        flex-flow: column nowrap;
        font-size: .8rem;
        margin: 0.5rem;
        line-height: 1.5;
        /* border-bottom: 1px solid #d0d0d0; */
        flex: 1 1 auto;
    }

    .th {
        display: none;
        font-weight: 700;
        background-color: #f2f2f2;
    }

    .th>.td {
        white-space: normal;
        justify-content: center;
    }

    .tr {
        width: 100%;
        display: flex;
        flex-flow: row nowrap;
    }

    .tr:nth-of-type(even) {
        background-color: ffffff;
    }

    .tr:nth-of-type(odd) {
        background-color: #ffffff;
    }

    .td {
        display: flex;
        flex-flow: row nowrap;
        flex-grow: 1;
        flex-basis: 0;
        padding: 2em;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        min-width: 0px;
        white-space: nowrap;
        border-bottom: 1px solid #d0d0d0;
    }

    .search {
        float: right;
    }

    /* Dropdown Button */
    .dropbtn {
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: absolute;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    /* .dropdown-content a:hover {background-color: #ddd} */

    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {
        display: block;
    }
</style> -->


<div style="margin-left: 5rem;">
    <label>Files</label>
</div>
<div class="search">
    <section style="flex-grow:1">
        <div role="search">
            <div class="searchIcon" role="button">
                <div class="flexed" style="padding-top:3px">
                    <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.143 8.308l2.788 2.825a.2.2 0 010 .28l-.554.562a.2.2 0 01-.285 0L8.308 9.154l.835-.846zm-4.066 1.846A5.077 5.077 0 115.077 0a5.077 5.077 0 010 10.154zm0-.923a4.154 4.154 0 100-8.308 4.154 4.154 0 000 8.308z"
                            fill="#000" fill-rule="nonzero" opacity="0.7">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="search-input ">
                <input type="search" id="seachInputId" value="">
            </div>
        </div>
    </section>
</div>
<div class="table">
    <div class="tr th">
        <div class="td" style="flex-grow: 6; justify-content: left;">
            <div>Name</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14" viewBox="0 0 7 14"
                class="header--sort-new-arrow csx-svg disabled" style="transform:rotate(180deg)">
                <path
                    d="M4 12.4l2.2-1.9c.2-.2.5-.2.7 0 .2.2.1.5-.1.7l-3 2.6s-.1.1-.2.1c-.2.1-.4.1-.5 0l-3-2.6c-.2-.2-.2-.5-.1-.7.2-.2.5-.2.7-.1L3 12.4V.5c0-.3.2-.5.5-.5s.5.2.5.5v11.9z">
                </path>
            </svg>
        </div>
        <div class="td">
            Last Updated
        </div>
        <div class="td">
            Favorites
        </div>
        <div class="td">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="14px" viewBox="0 0 16 14" version="1.1"
                        class="new-sort-menu-icon">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-423.000000, -658.000000)">
                                <rect id="Rectangle" x="0" y="97" width="2174" height="880"></rect>
                                <g id="Filter-Copy" opacity="0.6" transform="translate(423.000000, 658.000000)"
                                    fill="#000000">
                                    <path
                                        d="M1.21237994,2 C0.54642476,2 0,1.54929577 0,1 C0,0.450704225 0.54642476,0 1.21237994,0 L14.7876201,0 C15.4535752,0 16,0.450704225 16,1 C16,1.54929577 15.470651,2 14.8046958,2 L1.21237994,2 Z"
                                        id="Fill-1"></path>
                                    <path
                                        d="M9.95095368,8 L1.0640327,8 C0.479564033,8 0,7.54929577 0,7 C0,6.45070423 0.479564033,6 1.0640327,6 L9.9359673,6 C10.520436,6 11,6.45070423 11,7 C11,7.54929577 10.5354223,8 9.95095368,8"
                                        id="Fill-4"></path>
                                    <path
                                        d="M6.93233083,14 L1.06766917,14 C0.481203008,14 0,13.5492958 0,13 C0,12.4507042 0.481203008,12 1.06766917,12 L6.93233083,12 C7.51864662,12 8,12.4507042 8,13 C8,13.5492958 7.51864662,14 6.93233083,14"
                                        id="Fill-6"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>

                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Name</a>
                    <a href="#">Last Updated</a>
                    <a href="#">File Type</a>
                    <a href="#">File Size</a>
                </div>
            </div>
        </div>
    </div>
    <div class="tr table-total">
        <div class="td" style="flex-grow: 6;">
            <div>
                <span style="width:unset;padding-left:12px">
                    <svg width="40px" height="44px" viewBox="0 0 40 44" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="💟-Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Icons-/-Folder-/-Classic">
                                <polygon id="Color-8" fill="#008566"
                                    points="2 35.995645 2 14.0034218 38 14.0034218 38 36"></polygon>
                                <polygon id="#000000" fill="#FFFFFF" points="2 9 15.7423156 9 19 14 2 14">
                                </polygon>
                                <polygon id="60%" fill="#008566" opacity="0.6" points="2 9 15.7423156 9 19 14 2 14">
                                </polygon>
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
            <div style="display:inline">
                <span style="padding-left:13px">
                    <div style="padding-right:0px;width:auto !important;overflow:hidden">
                        <span>Datasheets</span>
                        <span>
                            <div>
                                <span role="button"></span>
                                <span style="display:inline">
                                    <span>7 items</span>
                                </span>
                            </div>
                        </span>
                    </div>
                </span>
            </div>
        </div>
        <div class="td" style="justify-content: center;">
            <div>Nov 25, 2020</div>
        </div>
        <div class="td" style="justify-content: center;">
            <div>
                <span>
                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" class="empty-star">
                        <path
                            d="M12.265 14.066l-.909-4.953 3.403-2.965-4.617-.309-2.155-4.673-2.334 4.779-4.354.22 3.78 3.16-1.244 4.687 4.166-2.243 4.264 2.297z"
                            stroke="#000" fill="none" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        </div>
        <div class="td" style="justify-content: center;">
            <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg>
            </button>
        </div>
    </div>
    <div class="tr">
        <div class="td" style="flex-grow: 6;">
            <div>
                <span style="width:unset;padding-left:12px">
                    <svg width="40px" height="44px" viewBox="0 0 40 44" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="💟-Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Icons-/-Folder-/-Classic">
                                <polygon id="Color-8" fill="#008566"
                                    points="2 35.995645 2 14.0034218 38 14.0034218 38 36"></polygon>
                                <polygon id="#000000" fill="#FFFFFF" points="2 9 15.7423156 9 19 14 2 14">
                                </polygon>
                                <polygon id="60%" fill="#008566" opacity="0.6" points="2 9 15.7423156 9 19 14 2 14">
                                </polygon>
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
            <div style="display:inline">
                <span style="padding-left:13px">
                    <div style="padding-right:0px;width:auto !important;overflow:hidden">
                        <span>Declaration of conformity</span>
                        <span>
                            <div>
                                <span role="button"></span>
                                <span style="display:inline">
                                    <span>20 items</span>
                                </span>
                            </div>
                        </span>
                    </div>
                </span>
            </div>
        </div>
        <div class="td" style="justify-content: center;">
            <div>Jun 30, 2021</div>
        </div>
        <div class="td" style="justify-content: center;">
            <div>
                <span>
                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" class="empty-star">
                        <path
                            d="M12.265 14.066l-.909-4.953 3.403-2.965-4.617-.309-2.155-4.673-2.334 4.779-4.354.22 3.78 3.16-1.244 4.687 4.166-2.243 4.264 2.297z"
                            stroke="#000" fill="none" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        </div>
        <div class="td" style="justify-content: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg>
        </div>
    </div>
    <div class="tr">
        <div class="td" style="flex-grow: 6;">
            <div>
                <span style="width:unset;padding-left:12px">
                    <svg width="40px" height="44px" viewBox="0 0 40 44" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="💟-Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Icons-/-Folder-/-Classic">
                                <polygon id="Color-8" fill="#008566"
                                    points="2 35.995645 2 14.0034218 38 14.0034218 38 36"></polygon>
                                <polygon id="#000000" fill="#FFFFFF" points="2 9 15.7423156 9 19 14 2 14">
                                </polygon>
                                <polygon id="60%" fill="#008566" opacity="0.6" points="2 9 15.7423156 9 19 14 2 14">
                                </polygon>
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
            <div style="display:inline">
                <span style="padding-left:13px">
                    <div style="padding-right:0px;width:auto !important;overflow:hidden">
                        <span>Leaflets</span>
                        <span>
                            <div>
                                <span role="button"></span>
                                <span style="display:inline">
                                    <span>2 items</span>
                                </span>
                            </div>
                        </span>
                    </div>
                </span>
            </div>
        </div>
        <div class="td" style="justify-content: center;">
            <div>Feb 16, 2021</div>
        </div>
        <div class="td" style="justify-content: center;">
            <div>
                <span>
                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" class="empty-star">
                        <path
                            d="M12.265 14.066l-.909-4.953 3.403-2.965-4.617-.309-2.155-4.673-2.334 4.779-4.354.22 3.78 3.16-1.244 4.687 4.166-2.243 4.264 2.297z"
                            stroke="#000" fill="none" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        </div>
        <div class="td" style="justify-content: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg>
        </div>
    </div>
    <div class="tr">
        <div class="td" style="flex-grow: 6;">
            <div>
                <span style="width:unset;padding-left:12px">
                    <svg width="40px" height="44px" viewBox="0 0 40 44" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="💟-Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Icons-/-Folder-/-Classic">
                                <polygon id="Color-8" fill="#008566"
                                    points="2 35.995645 2 14.0034218 38 14.0034218 38 36"></polygon>
                                <polygon id="#000000" fill="#FFFFFF" points="2 9 15.7423156 9 19 14 2 14">
                                </polygon>
                                <polygon id="60%" fill="#008566" opacity="0.6" points="2 9 15.7423156 9 19 14 2 14">
                                </polygon>
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
            <div style="display:inline">
                <span style="padding-left:13px">
                    <div style="padding-right:0px;width:auto !important;overflow:hidden">
                        <span>User guides</span>
                        <span>
                            <div>
                                <span role="button"></span>
                                <span style="display:inline">
                                    <span>50 items</span>
                                </span>
                            </div>
                        </span>
                    </div>
                </span>
            </div>
        </div>
        <div class="td" style="justify-content: center;">
            <div>Mar 30, 2021</div>
        </div>
        <div class="td" style="justify-content: center;">
            <div>
                <span>
                    <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg"
                        fill-rule="evenodd" class="empty-star">
                        <path
                            d="M12.265 14.066l-.909-4.953 3.403-2.965-4.617-.309-2.155-4.673-2.334 4.779-4.354.22 3.78 3.16-1.244 4.687 4.166-2.243 4.264 2.297z"
                            stroke="#000" fill="none" fill-rule="evenodd"></path>
                    </svg>
                </span>
            </div>
        </div>
        <div class="td" style="justify-content: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg>
        </div>
    </div>
</div>