<script src="https://apis.google.com/js/platform.js" async defer></script>

<script type="text/javascript">
	$(function() {
	});

	function onSignIn(googleUser) {
        <? if ($account): ?>
            return;
        <? endif; ?>

        const profile = googleUser.getBasicProfile();
        const googleId = profile.getId();
        const name = profile.getName();
        const email = profile.getEmail();

        $.ajax({
            data: {
            	name: name,
            	email: email,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
                alert('Server Error.');
            },
            success: function(data) {
                if (data.status == 'success') {
                    if (data.setup > 0) {
                        window.location.href = "<?= base_url(); ?>setup/";
                    }
                    else {
                        window.location.href = "<?= base_url(); ?>account/";
                    }
                }
                else {
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_google_signin/'
        });
    }

    function onSignInRecommendation(googleUser) {
        <? if ($account): ?>
            return;
        <? endif; ?>

        const profile = googleUser.getBasicProfile();
        const googleId = profile.getId();
        const name = profile.getName();
        const email = profile.getEmail();

        $.ajax({
            data: {
                name: name,
                email: email,
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            error: function() {
                alert('Server Error.');
            },
            success: function(data) {
                if (data.status == 'success') {
                    if (data.setup > 0) {
                        window.location.href = "<?= base_url(); ?>setup/to/checkout/";
                    }
                    else {
                        window.location.href = '<?= base_url(); ?>checkout/address/';
                    }
                }
                else {
                    alert(data.message);
                }
            },
            type : 'POST',
            url : '<?= base_url(); ?>ajax/ajax_google_signin/1/'
        });
    }

    function signOut() {
        window.location.href = '<?= base_url(); ?>logout/';
    }
</script>