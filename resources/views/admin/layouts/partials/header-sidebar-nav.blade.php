<div class="sidebar-nav">
    <!--navigation-->
    <ul class="metismenu" id="sidenav">
        <li>
            <a href="{{route('admin.dashboard')}}"  class="active">
                <div class="parent-icon"><i class="material-icons-outlined">home</i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                </div>
                <div class="menu-title">Categories</div>
            </a>
            <ul>
                <li><a href="{{ route('admin.categories.create') }}"><i class="material-icons-outlined">arrow_right</i>Add Category</a>
                </li>
                <li><a href="{{ route('admin.categories.index') }}"><i class="material-icons-outlined">arrow_right</i>List Categories</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="material-icons-outlined">library_books</i>
                </div>
                <div class="menu-title">Posts</div>
            </a>
            <ul>
                <li><a href="{{ route('admin.posts.create') }}"><i class="material-icons-outlined">arrow_right</i>Add Post</a>
                </li>
                <li><a href="{{ route('admin.posts.index') }}"><i class="material-icons-outlined">arrow_right</i>List Posts</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="has-arrow">
                <div class="parent-icon"><i class="material-icons-outlined">sell</i>
                </div>
                <div class="menu-title">Tags</div>
            </a>
            <ul>
                <li><a href="{{ route('admin.tags.create') }}"><i class="material-icons-outlined">arrow_right</i>Add Tag</a>
                </li>
                <li><a href="{{ route('admin.tags.index') }}"><i class="material-icons-outlined">arrow_right</i>List Tagss</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
