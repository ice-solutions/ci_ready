# ci_ready

**ci_ready** is a ready-to-use PHP CodeIgniter version 3 project template that you can easily deploy using Composer. It includes essential configurations and a basic structure to kickstart your CodeIgniter project.

## Getting Started

To create a new CodeIgniter project using this template, run the following Composer command:

```bash
composer create-project iceithq/ci_ready my_ci_project
```

Replace `my_ci_project` with your desired project name.

## Features

* **CodeIgniter 3**: Utilizes the stable and widely used version of CodeIgniter.
* **Ready-to-Use**: Comes with essential configurations and a basic project structure.
* **Composer-Friendly**: Easily deployable using Composer for efficient package management.

## Directory Structure

The project structure follows CodeIgniter conventions:

```
my_ci_project/
├── application/
├── system/
├── public/
│   ├── index.php
│   └── ...
├── vendor/
├── composer.json
├── .gitignore
├── README.md
└── ...
```

* `application/`: Contains your application-specific code.
* `system/`: Holds the CodeIgniter system files.
* `public/`: Web server root directory with index.php as the entry point.
* `vendor/`: Composer dependencies.
* `composer.json`: Composer configuration file.
* `.gitignore`: Gitignore file to specify files and directories to be ignored by version control.
* `README.md`: Project documentation.

## Documentation

For detailed documentation on CodeIgniter, refer to the official CodeIgniter User Guide.

## Contributing

Feel free to contribute to improve and expand this project. Follow the CodeIgniter Coding Standards when submitting pull requests.

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.
