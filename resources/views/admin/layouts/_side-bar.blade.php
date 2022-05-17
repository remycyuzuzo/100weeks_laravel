<div id="overlay" class="d-none"></div>
<aside class="side-bar d-flex flex-column justify-content-between">
    <div>
        <div class="user-name-box p-2">
            <div class="d-flex">
                <div class="image">
                    <div class="bg-primary" style="width: 40px; height: 40px; border-radius: 50%;"></div>
                </div>
                <div class="name">
                    <div class="px-2">
                        @php
                            $user = \App\Models\Personnel::find(auth()->id());
                        @endphp
                        <strong>{{ $user->fname . " " . $user->lname }}</strong>
                        <div class="authority">
                            {{ ucfirst($user->personnel_type) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul>
            <li><a href="/">Dashboard</a></li>
            <li><a href="/payments">Payments</a></li>
            <li><a href="/loans">Loans</a></li>
            <li class=""><a href="/vslas">VSLAs</a></li>
            <li><a href="#">Beneficiaries</a>
                <ul>
                    <li class=""><a href="{{route('beneficiaries')}}">View beneficiaries</a></li>
                    <li><a href="{{ route('new-beneficiary') }}">Add new beneficiary</a></li>
                </ul>
            </li>
            <li><a href="/">General report & exports</a></li>
            <li><a href="/users">System users</a>
                <ul>
                    <li><a href="/users">Manage Users</a></li>
                    <li><a href="/users/coach/new">VSLA mentors</a></li>
                    <li><a href="/users/administrator/new">System administrator</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <ul>
        <li><a href="#"><i class="fas fa-gear"></i> Change settings</a></li>
    </ul>
</aside>