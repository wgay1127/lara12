<x-layout>
<div>
@if(@auth()->check() && auth()->user()->is_admin)
    <h1>Admin Dashboard</h1>
    <p>Welcome to the admin dashboard. Here you can manage users, view analytics, and perform administrative tasks.</p> 
    <div id="usersList">

    </div>
    <div id="showUsersComponent"></div>
    <div id="app"></div>
</div>
@else   
    <h1>Access Denied</h1>
    <p>You do not have permission to access this page. Please log in as an administrator.</p>
@endif
</div>
</x-layout>