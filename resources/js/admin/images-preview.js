$(document).ready(function () {
    ImgUpload();

    function ImgUpload() {
        const fileInput = $('.input-files').get(0);

        let imgWrap = '';
        let images = [];
        // console.log(images);

        $('.input-images').each(function () {
            $(this).on('change', function (e) {
                imgWrap = $(this).closest('.upload-container').find('.image-preview-wrapper');
                
                const dataTransfer = new DataTransfer();
                let files = e.target.files;
                let filesArr = Array.prototype.slice.call(files);
                let iterator = 0;

                filesArr.forEach((f, index) => {
                    let len = 0;
                    for (let i = 0; i < images.length; i++) {
                        if (images[i] !== undefined) {
                            len++;
                        }
                    }

                    images.push(f);
                    images.forEach(image => {
                        dataTransfer.items.add(image);
                    });
                    fileInput.files = dataTransfer.files;

                    let reader = new FileReader();
                    reader.onload = function (e) {
                        let html = "";
                        if (f.type == 'application/pdf') {
                            html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg' ><div class='upload__img-close'></div><img  src='https://cdn-icons-png.flaticon.com/128/337/337946.png'></div></div>";
                        } else {
                            html = "<div class='w-fit relative'><img src='" + e.target.result + "' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='h-40' /><div class='img-close absolute top-px right-px text-center text-white z-10 cursor-pointer w-6 h-6 rounded-full bg-gray-900 opacity-50'>X</div></div>";
                        }

                        imgWrap.append(html);
                        iterator++;
                    }
                    reader.readAsDataURL(f);
                });
            });
        });

        $('.upload-container').on('click', '.img-close', function (e) {
            const file = $(this).parent().find('img').data('file');
            const dataTransfer = new DataTransfer();

            for (let i = 0; i < images.length; i++) {
                if (images[i].name === file) {
                    images.splice(i, 1);
                    break;
                }
            }

            // edit form, image to remove from database
            if (/^\d+(?:\.\d+)?$/.test(file)) {
                let inputHidden = `<input type="hidden" name="img_to_remove[]" value="${file}"></input>`
                $('.upload-container').append(inputHidden);
            }

            $(this).parent().remove();
            images.forEach(image => {
                dataTransfer.items.add(image);
            });
            fileInput.files = dataTransfer.files;
            //    console.log(images);
        });
    }
});