@extends('components.navbar')

@section('content')
    <style>
        .profile-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .profile-container h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-container .profile-info label {
            font-weight: bold;
        }
        .profile-container .btn-edit,
        .profile-container .btn-save,
        .profile-container .btn-cancel {
            display: none;
        }
    </style>

    <div class="container profile-container">
        <h3>Profile Page</h3>
        <form id="profileForm">
            <!-- Nama Lengkap -->
            <div class="text-center mb-4">
                <img class="img-profile rounded-circle" src="images/logoRounded.png" style="width: 200px; height: 200px;">
                            <input type="file" class="form-control" id="fullName" value="Upload Foto" disabled>
            </div>
            
            <div class="form-group">
                <label for="fullName">Nama Lengkap:</label>
                <input type="text" class="form-control" id="fullName" value="Satrio Dinda Krisna Murti" disabled>
            </div>

            <!-- NIK -->
            <div class="form-group">
                <label for="nik">NIK (Nomor Induk Karyawan):</label>
                <input type="text" class="form-control" id="nik" value="201011450228" disabled>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" value="SatrioDKM@hotmail.com" disabled>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" value="*********" disabled>
            </div>

            <!-- Role/Jabatan -->
            <div class="form-group">
                <label for="role">Role / Jabatan:</label>
                <input type="text" class="form-control" id="role" value="Staff IT" disabled>
            </div>

            <!-- Divisi -->
            <div class="form-group">
                <label for="division">Divisi:</label>
                <input type="text" class="form-control" id="division" value="IT Support" disabled>
            </div>

            <!-- Nomor Telepon -->
            <div class="form-group">
                <label for="phoneNumber">Nomor Telepon:</label>
                <input type="text" class="form-control" id="phoneNumber" value="+62 812-3456-7890" disabled>
            </div>

            <!-- Status Akun -->
            <div class="form-group">
                <label for="accountStatus">Status Akun:</label>
                <input type="text" class="form-control" id="accountStatus" value="Aktif" default:disabled>
            </div>

            <!-- Action Buttons -->
            <div class="form-group text-center">
                <button type="button" class="btn btn-primary" id="editBtn">Ubah</button>
                <button type="button" class="btn btn-success" id="saveBtn" style="display:none;">Simpan</button>
                <button type="button" class="btn btn-danger" id="cancelBtn" style="display:none;">Batal</button>
            </div>
        </form>
    </div>

    <!-- Load jQuery yang penuh -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Full version of jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            // Get elements
            const editBtn = $('#editBtn');
            const saveBtn = $('#saveBtn');
            const cancelBtn = $('#cancelBtn');
            const formFields = $('.form-control');

            // Show input fields and hide the text values when Edit button is clicked
            editBtn.click(function() {
                formFields.prop('disabled', false);
                editBtn.hide();
                saveBtn.show();
                cancelBtn.show();
            });

            // Cancel the edit and return to the profile view
            cancelBtn.click(function() {
                formFields.prop('disabled', true);
                editBtn.show();
                saveBtn.hide();
                cancelBtn.hide();
            });

            // Save the changes (simulated here)
            saveBtn.click(function() {
                formFields.prop('disabled', true);
                editBtn.show();
                saveBtn.hide();
                cancelBtn.hide();

                // Here you can add functionality to save the changes (e.g., using AJAX)
                alert("Perubahan telah disimpan.");
            });
        });
    </script>
@endsection
