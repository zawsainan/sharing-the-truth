<script src="js/bootstrap.bundle.min.js"></script>

<footer class="bg-primary-color">
    <div class="container py-4 py-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img
                    src="assets/images/logo.png"
                    class="d-block mx-auto"
                    alt=""
                    width="100px" />
                <h5
                    class="font-roboto fs-2 text-center text-orange mt-4">
                    Sharing the Truth
                </h5>
                <p class="text-white text-center text-sm">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, asperiores.
                </p>
            </div>
            <div class="col-12 col-md-5 mb-4 mb-md-0">
                <h6 class="text-white fs-5 fw-semibold">Address</h6>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-3">
                        <img
                            src="assets/icons/location.svg"
                            alt=""
                            class="address-icon me-2" />
                        <span class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nihil repudiandae a similique ipsam enim voluptas asperiores eligendi rem cupiditate.
                        </span>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <img
                            src="assets/icons/phone.svg"
                            alt=""
                            class="address-icon me-2" />
                        <a
                            href="tel: ?>"
                            class="text-white text-decoration-none">0934253252342
                        </a>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <img
                            src="assets/icons/mail.svg"
                            alt=""
                            class="address-icon me-2" />
                        <a
                            href="mailto:"
                            class="text-white text-decoration-none"
                            style="overflow-wrap: anywhere">lorem@gmail.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3">
                <h6 class="text-white fs-5 fw-semibold">
                    Social Link
                </h6>
                <div class="d-flex">
                    <a target="_blank"
                        href=""
                        class="text-decoration-none d-block me-3">
                        <img
                            src="assets/icons/facebook.svg"
                            width="40"
                            alt="" />
                    </a>
                    <a target="_blank"
                        href=""
                        class="text-decoration-none d-block">
                        <img
                            src="assets/icons/whatsapp.svg"
                            width="40"
                            alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contact-form');
        let messageBox = document.getElementById('messageBox');
        const submitButton = document.getElementById('submitButton');
        const originalContent = submitButton.innerHTML;
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            submitButton.innerHTML = "Sending...";
            submitButton.disabled = true;

            fetch(" ?>/sent.php", {
                method: "POST",
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    messageBox.innerHTML = data.message;
                    messageBox.style.display = "block";
                    if (data.success) {
                        form.reset();
                    }
                    setTimeout(() => {
                        messageBox.style.display = "none";
                        messageBox.innerHTML = "";
                    }, 5000)
                })
                .catch(
                    error => {
                        console.log("Error:", error);
                        messageBox.innerHTML = "<span style='color: red;'>An error occurred. Please try again later.</span>";
                        setTimeout(() => {
                            messageBox.style.display = "none";
                            messageBox.innerHTML = "";
                        }, 5000)
                    }
                )
                .finally(() => {
                    submitButton.innerHTML = originalContent;
                    submitButton.disabled = false;
                })
        })

    });
</script> -->