<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />

                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <label for="photo"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Ubah Foto Profil') }}</label><br>
                                    <div class="col-md-6">
                                        <input id="photo" type="file" class="form-control" name="photo">
                                    </div>
                                </div>
                                <div>
                                    <x-label for="nama" :value="__('Nama')" />
                                    <x-input id="nama" class="block mt-1 w-full" type="text"
                                        name="nama" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="text"
                                        name="email" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="tempat_tanggalLahir" :value="__('Tempat Tanggal Lahir')" />
                                    <x-input id="tempat_tanggalLahir" class="block mt-1 w-full" type="text"
                                        name="tempat_tanggalLahir" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="agama" :value="__('Agama')" />
                                    <x-input id="agama" class="block mt-1 w-full" type="text"
                                        name="agama" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="Asal_Sekolah" :value="__('Asal Sekolah')" />
                                    <x-input id="Asal_Sekolah" class="block mt-1 w-full" type="text"
                                        name="Asal_Sekolah" autocomplete="" />
                                </div>
                            </div>
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="Alamat_Sekolah" :value="__('Alamat Sekolah')" />
                                    <x-input id="Alamat_Sekolah" class="block mt-1 w-full" type="text"
                                        name="Alamat_Sekolah" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="Program_Keahlihan" :value="__('Program Keahlihan')" />
                                    <x-input id="Program_Keahlihan" class="block mt-1 w-full" type="text"
                                        name="Program_Keahlihan" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="Nomor_Induk" :value="__('Nomor Induk')" />
                                    <x-input id="Nomor_Induk" class="block mt-1 w-full" type="text"
                                        name="Nomor_Induk" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="Alamat_Rumah" :value="__('Alamat Rumah')" />
                                    <x-input id="Alamat_Rumah" class="block mt-1 w-full" type="text"
                                        name="Alamat_Rumah" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="notelp_Pribadi" :value="__('No Telp Pribadi')" />
                                    <x-input id="notelp_Pribadi" class="block mt-1 w-full" type="text"
                                        name="notelp_Pribadi" autocomplete="" />
                                </div>
                                <div>
                                    <x-label for="notelp_OrangTua" :value="__('No Telp OrangTua')" />
                                    <x-input id="notelp_OrangTua" class="block mt-1 w-full" type="text"
                                        name="notelp_OrangTua" autocomplete="" />
                                </div>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-3">
                                    {{ __('Update') }}
                                </x-button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#update-profile-form").submit(function(event){
                event.preventDefault();

                var form = $(this)[0];
                var data = new FormData(form);

                $("#update-button").prop("disabled", true);

                $.ajax({
                    type: "POST",
                    url: "{{ route('profile.update') }}",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(response){
                        // Handle success response here
                        console.log(response);
                    },
                    error: function(error){
                        // Handle error here
                        console.error(error);
                    },
                    complete: function(){
                        // Re-enable the button after request completion
                        $("#update-button").prop("disabled", false);
                    }
                });
            });
        });
    </script>

</x-app-layout>
