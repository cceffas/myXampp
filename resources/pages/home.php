<?= start_html5() ?>

<?= include_partial("head") ?>

<body class="flex flex-col bg-zinc-800 w-full h-screen">

    <?= include_partial("header") ?>

    <div class="relative flex flex-col items-center h-[500px] w-full p-4 shadow-2xl overflow-hidden">

        <div class="flex items-center w-full h-16 bg-neutral-900 rounded-t-xl p-4">


            <ul class="flex items-center w-full justify-between font-bold text-white p-2">

                <li class='flex items-center gap-1'>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="size-6 text-indigo-400">
                        <path
                            d="M19.906 9c.382 0 .749.057 1.094.162V9a3 3 0 0 0-3-3h-3.879a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H6a3 3 0 0 0-3 3v3.162A3.756 3.756 0 0 1 4.094 9h15.812ZM4.094 10.5a2.25 2.25 0 0 0-2.227 2.568l.857 6A2.25 2.25 0 0 0 4.951 21H19.05a2.25 2.25 0 0 0 2.227-1.932l.857-6a2.25 2.25 0 0 0-2.227-2.568H4.094Z" />
                    </svg>

                    htdoc
                </li>
                <!-- end -->

                <li>
                    Total :
                     <span class="text-sm font-normal ml-1 text-indigo-400">
                        <?= count(get_folders()); ?>
                    </span>
                </li>
                <!-- end -->

            </ul>


        </div>
        <!-- end -->

        <div class="flex flex-wrap w-full p-4 gap-4 h-full  rounded-b-lg overflow-y-auto overflow-x-hidden">


            <?php foreach (get_folders() as $folder): ?>
                <div
                    class="flex flex-col justify-center items-center text-white gap-2 p-4 grow hover:bg-neutral-700 rounded-lg transition-transform ease-linear delay-75 hover:scale-95 cursor-pointer hover:outline-2  w-40">


                    <img src="public/Icons/php-opened-svgrepo-com.svg" alt="image-folder" class="size-18">


                    <span class="text-sm text-center truncate w-full">
                        <?= $folder; ?>
                    </span>





                    <div class="flex">

                        <a href="<?= "/" . urlencode($folder) ?>"
                            class='flex items-center gap-2 px-4 py-2 rounded-2xl bg-indigo-600 hover:text-indigo-500 hover:border hover:bg-indigo-600/20 transition-all delay-75 ease-in-out group'
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="group-hover:hidden size-4">
                                <path
                                    d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" />
                            </svg>



                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 hidden group-hover:flex">
                                <path fill-rule="evenodd"
                                    d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd" />
                            </svg>

                            abrir

                        </a>
                    </div>



                </div>
            <?php endforeach; ?>

        </div>
        <!-- end -->

    </div>

</body>

<?= end_html5() ?>