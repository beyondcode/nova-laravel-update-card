<template>
    <div class="px-3 mb-6 w-full">
        <div class="flex justify-center items-centers">
            <div class="w-full max-w-xl">
                <card class="flex flex-col items-center justify-center laravel-bg" style="min-height: 118px;">
                    <div class="px-3 py-3 w-full">

                        <div style="padding-left: 200px">
                            <div v-if="currentVersion">
                                <h1 class="text-3xl text-80 font-light" v-if="! updateAvailable">
                                    Awesome, you're using the latest version of Laravel!
                                </h1>
                                <h1 class="text-3xl text-error-message font-light" v-else>
                                    A new version of Laravel is available.
                                </h1>

                                <p class="pt-3" v-if="updateAvailable">
                                    <span class="text-80">Your version:</span> <span class="text-90">{{ currentVersion}}</span><br>
                                </p>
                                <p class="pt-3" v-if="latestVersion">
                                    <span class="text-80">Latest version:</span> <span class="text-90">{{ latestVersion}}</span><br>
                                </p>
                            </div>
                            <div v-else>
                                <h1 class="text-center text-3xl text-80 font-light">
                                    Checking for Laravel updates...
                                </h1>
                            </div>
                        </div>
                    </div>
                </card>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['card'],

    data() {
        return {
            updateAvailable: false,
            currentVersion: null,
            latestVersion: null
        };
    },

    mounted() {
        Nova.request().get('/nova-vendor/beyondcode/laravel-update-card/check')
            .then(({data}) => {
                this.latestVersion = data.latest_version;
                this.currentVersion = data.current_version;
                this.updateAvailable = data.update_available;
            });
    },
}
</script>

<style>
    .st0{fill:#FB503B;}
    .laravel-bg {
        background-image: url("data:image/svg+xml;utf8,<svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 700 700' style='enable-background:new 0 0 700 700;' xml:space='preserve'><path class='st0' fill='%23FB503B' d='M556.8,344.2c-2.9-3.2-42.3-52.6-49.3-61c-7-8.4-10.3-6.9-14.6-6.2s-54.2,9-60,10c-5.8,1-9.4,3.3-5.9,8.3c3.2,4.4,36,51,43.2,61.2l-130.5,31.3L236.1,214.3c-4.1-6.1-5-8.3-14.4-7.8c-9.4,0.4-81.4,6.4-86.5,6.8c-5.1,0.4-10.8,2.7-5.6,14.8c5.1,12.1,86.9,188.3,89.2,193.4c2.3,5.1,8.2,13.4,22.1,10.1c14.2-3.4,63.5-16.3,90.4-23.3c14.2,25.8,43.3,78,48.6,85.5	c7.2,10,12.1,8.3,23.1,5c8.6-2.6,134.4-47.8,140.1-50.2c5.7-2.3,9.2-4,5.3-9.7c-2.8-4.2-36-48.6-53.4-71.9c11.9-3.2,54.2-14.4,58.8-15.7C559,350,559.7,347.4,556.8,344.2z M319.6,392.7c-1.6,0.3-74.6,17.8-78.5,18.7c-3.9,0.9-3.9,0.4-4.3-0.9c-0.4-1.3-86.9-179.6-88.1-181.8c-1.2-2.2-1.1-4,0-4c1.1,0,69-6.1,71.4-6.2s2.1,0.4,3,1.9c0,0,95.7,165.2,97.4,168.1C322.2,391.5,321.2,392.4,319.6,392.7z M525.7,431.3c1.2,1.8,2.3,3-1.3,4.3c-3.7,1.3-123.7,41.8-126,42.8c-2.3,1-4.2,1.3-7.2-3s-42-71.9-42-71.9l127.2-33.1c3.2-1,4.2-1.7,6.2,1.5S524.5,429.5,525.7,431.3z M533.8,341c-2.9,0.6-49.6,12.2-49.6,12.2l-38.2-52.4c-1.1-1.5-2-3,0.7-3.4c2.7-0.4,46.1-8.2,48-8.6c2-0.4,3.7-1,6.1,2.3c2.4,3.3,35.4,45.1,36.7,46.7C538.8,339.4,536.7,340.4,533.8,341z'/></svg>");
        background-size: 340px 280px;
        background-position: -70px -81px;
        background-repeat: no-repeat;
    }

</style>