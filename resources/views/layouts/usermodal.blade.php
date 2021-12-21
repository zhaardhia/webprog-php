    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Change your Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img id="img" src="{{ Auth::user()->picture }}" alt="profile-picture" style="width: 20rem; height: 10rem; object-fit: cover" class="rounded text-center d-flex m-auto">
            <form onsubmit="changeProfileConfig()" id="form-profile">
              <div class="mb-3 mt-3">
                <label for="" class="form-label">Profile Picture</label>
                <input required type="text" class="form-control" id="password" placeholder="https://unsplash.com/">
              </div>
              <button type="submit" id="btn-submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <script>
      const changeProfileConfig = () => {
        event.preventDefault()

        const pictureLink = document.getElementById('password').value;
        const img = document.getElementById('img')
        const form = document.getElementById('form-profile')
        const button = document.getElementById('btn-submit')

        button.innerHTML = `
        <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
        </div>
       `

        $.ajax({
          type: "POST",
          url: "/change-profile",
          data: {
            "_token": "{{ csrf_token() }}",
            "picture_link": pictureLink,
          },
          success: function(result) {
            img.src = pictureLink
            form.reset()

            button.innerHTML = `Submit`
          },
          error: (err) => {
            button.innerHTML = `Submit`
          }
        })
      }
    </script>