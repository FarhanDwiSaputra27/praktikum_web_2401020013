USE praktikum_web_2401020013;

INSERT INTO program_studi (nama_prodi) VALUES
    ('Teknik Informatika'),
    ('Teknik Elektro');

INSERT INTO mahasiswa
    (nim, nama, email, usia, program_studi_id)
VALUES
    ('2401020013', 'Farhan Dwi Saputra', 'farhandwis27@gmail.com', 20, 1),
    ('2401020025', 'Nurul Syafika', 'nrlsyfkaa30@gmail.com', 21, 1),
    ('2401020022', 'Azizul Rizky Mahadi', 'alongzizul06@gmail.com', 19, 2),
    ('2401020051', 'Abdul', 'abdul@gmail.com', 22, 2);

UPDATE mahasiswa
SET email = 'farhan.dwi@example.com'
WHERE nim = '2401020013';

DELETE FROM mahasiswa
WHERE nim = '2401020051';

SELECT
    m.nim,
    m.nama,
    m.email,
    m.usia,
    p.nama_prodi
FROM mahasiswa AS m
JOIN program_studi AS p
    ON p.id = m.program_studi_id
ORDER BY m.nim;