# File Encryption and Decryption

This GitHub repository provides a simple implementation of file encryption and decryption using symmetric key cryptography in PHP. It allows you to securely encrypt and decrypt files on your local machine.

## Features

- Encryption: The repository includes a PHP script that enables you to encrypt a file using a symmetric encryption algorithm. You can specify the input file and the desired output file for the encrypted data. The script generates a secure random key, encrypts the file contents using the key, and saves the encrypted data to the output file.

- Decryption: Similarly, there is a PHP script to decrypt an encrypted file. You need to provide the encrypted file and the output file where the decrypted data will be stored. The script uses the same key that was used for encryption to decrypt the file contents and saves the decrypted data to the output file.

- Symmetric Key Generation: The repository includes a utility function in PHP to generate a secure random key that can be used for encryption and decryption. This ensures that each file encryption operation uses a unique key, enhancing the security of the encrypted data.

- User Interface: The implementation also includes a simple command-line user interface in PHP to interact with the encryption and decryption scripts. The user interface prompts you to provide the necessary inputs such as file paths and handles the encryption/decryption process for you.

## Getting Started

To use this file encryption and decryption system in PHP, follow these steps:

1. Clone the repository to your local machine using the following command:

   ```
   git clone https://github.com/kuyagep/PHPCryptography.git
   ```

2. Navigate to the project directory:

   ```
   cd PHPCryptography
   ```

3. Ensure you have PHP installed on your machine.

4. Run the encryption script:

   ```
   php encrypt.php
   ```

   Follow the prompts to provide the input and output file paths.

5. Run the decryption script:

   ```
   php decrypt.php
   ```

   Provide the path to the encrypted file and the output file.

## How to run

Requirements

1. Download and Install any local web server such as XAMPP.
2. Download the source code zip file. (download button is located below)

## How to run

System Installation/Setup

1. Open your XAMPP Control Panel and start Apache and MySQL.
2. Extract the downloaded source code zip file.
3. Copy the extracted source code folder and paste it into the XAMPP's "htdocs" directory.
4. Browse the Cryptography Web Application in a browser. i.e. http://localhost/phpcryptography/.

## Security Considerations

- **Key Management**: The generated symmetric key is crucial for the security of your encrypted files. Make sure to store the key securely and avoid sharing it with unauthorized parties.

- **Transporting Encrypted Files**: When transmitting or sharing encrypted files, ensure that they are transferred securely over a trusted channel to prevent unauthorized access to the data.

- **Password Protection**: You can add an extra layer of security by encrypting the symmetric key using a password-based key derivation function (PBKDF) and storing the encrypted key. This way, the key will be protected by a password, and only those with the correct password can decrypt the files.

## Contributions

Contributions to this repository are welcome! If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to modify and distribute the code as per the terms of the license.

## Disclaimer

This repository provides a basic implementation of file encryption and decryption for educational purposes. While the code aims to provide security, it is essential to review and understand the implementation before using it in a production environment. The repository owners and contributors are not responsible for any misuse or damages resulting from the use of this code.
