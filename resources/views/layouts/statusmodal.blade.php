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

<script>
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
