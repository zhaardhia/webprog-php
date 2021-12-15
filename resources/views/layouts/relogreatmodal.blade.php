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
                        <input readonly type="text" id="comLinkDiscord" class="form-control communityLink"
                            value="http/discord.com/relogreat" aria-label="http/wkkwkw"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"
                            onclick="copyToClipboard('comLinkDiscord')">Copy</button>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <label for="">Slack</label>
                    <div class="input-group mb-3">
                        <input readonly type="text" id="comLinkSlack" class="form-control"
                            value="https://slack.com/relogreat" aria-label="http/wk" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"
                            onclick="copyToClipboard('comLinkSlack')">Copy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        if (button.innerHTML === 'Copied!') {
            return;
        }

        // Update button label
        button.innerHTML = 'Copied!';

        // Revert button label after 3 seconds
        setTimeout(function() {
            button.innerHTML = currentLabel;
        }, 3000)
    }
</script>
