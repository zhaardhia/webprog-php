<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Relocate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/relogreat">Relogreat+</a>
                </li>
                {{-- IF cookie true, component user header, else --}}

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle nav-link" type="button" id="dropdownMenu2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                            <li><button class="dropdown-item yellow" type="button" data-bs-toggle="modal" data-bs-target="#reloCommunityModal">Relogreat+ Community</button></li>
                            <li><button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalStatus">Change Status</button></li>
                        </ul>
                    </div>
                @endguest
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    
    <!-- Modal Relogreat Community -->
    <div class="modal fade" id="reloCommunityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Relogreat+ Community</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column">
                    <label for="">Discord Channel</label>
                    <div class="input-group mb-3">
                        <input readonly type="text" id="comLinkDiscord" class="form-control communityLink" value="http/discord.com/relogreat" aria-label="http/wkkwkw" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="copyToClipboard('comLinkDiscord')">Copy</button>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <label for="">Slack</label>
                    <div class="input-group mb-3">
                        <input readonly type="text" id="comLinkSlack" class="form-control" value="https://slack.com/relogreat" aria-label="http/wk" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="copyToClipboard('comLinkSlack')">Copy</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal Status -->
    <div class="modal fade" id="modalStatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update your current city</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

           

            <select class="form-select" aria-label="Default select example">
                <option selected>Choose City</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div class="alert alert-primary d-none" style="margin-top: 2rem;" id="alert" role="alert">
                Success update city ❤
            </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" onclick="saveCity()">

                <p class="mb-0 ">Save Changes</p>

                <div class="spinner-border text-light d-none" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            
                </button>
            </div>
        </div>
        </div>
    </div>
</nav>

<script>
    const copyToClipboard = (id) => {
      /* Get the text field */
      let copyText = document.getElementById(id);
      const button = copyText.nextElementSibling;
    
      /* Select the text field */
      copyText.select();
      copyText.setSelectionRange(0, 99999); /* For mobile devices */
    
      /* Copy the text inside the text field */
      navigator.clipboard.writeText(copyText.value);

      const currentLabel = button.innerHTML;



        // Exit label update when already in progress
        if(button.innerHTML === 'Copied!'){
            return;
        }

        // Update button label
        button.innerHTML = 'Copied!';

        // Revert button label after 3 seconds
        setTimeout(function(){
            button.innerHTML = currentLabel;
        }, 3000)
    }

    const saveCity = async () => {
       const alert = document.getElementById('alert')
       const button = document.getElementById('btn-save')

       const wait = (amount) => new Promise(resolve => setTimeout(resolve, amount))

       button.innerHTML = `
        <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
        </div>
       `

       await wait(2000);

       button.innerHTML = `
          <p class="mb-0 ">Save Changes</p>
        `

       alert.classList.remove('d-none')
       alert.classList.add('d-block')       

       setTimeout(() => {
          alert.classList.add('d-none') 
          
       }, 3000);
    }

</script>