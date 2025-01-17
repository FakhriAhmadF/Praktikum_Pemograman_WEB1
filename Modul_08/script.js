$(document).ready(function () {
    // Memuat Data Alumni
    function loadAlumni() {
        $.post('index.php', { action: 'get' }, function (data) {
            let rows = '';
            data.forEach((alumnus, index) => {
                rows += `
                    <tr>
                        <td>${alumnus.nim}</td>
                        <td>${alumnus.name}</td>
                        <td>${alumnus.major}</td>
                        <td>${alumnus.year}</td>
                        <td>
                            <button class="delete-btn" data-index="${index}">Hapus</button>
                        </td>
                    </tr>`;
            });
            $('#alumni-table tbody').html(rows || '<tr><td colspan="5">Tidak ada data.</td></tr>');
        }, 'json');
    }

    // Tambah Alumni
    $('#alumni-form').on('submit', function (e) {
        e.preventDefault();
        const formData = $(this).serializeArray();
        formData.push({ name: 'action', value: 'add' });
        $.post('index.php', formData, function (response) {
            alert(response.message);
            loadAlumni();
            $('#alumni-form')[0].reset();
        }, 'json');
    });

    // Hapus Alumni
    $('#alumni-table').on('click', '.delete-btn', function () {
        const index = $(this).data('index');
        $.post('index.php', { action: 'delete', index }, function (response) {
            alert(response.message);
            loadAlumni();
        }, 'json');
    });

    // Load data saat halaman dibuka
    loadAlumni();
});
