﻿# WP-Custom-API-Logger-Plugin


**Version:** 1.0  
**Author:** Razel Ahmed

## Description

Custom API Logger is a WordPress plugin that logs REST API requests to a file for monitoring unusual activity. It helps developers and site administrators keep track of all API interactions on their WordPress site.

## Features

- Logs all REST API requests (GET, POST, DELETE, etc.).
- Stores logs in `wp-content/api-request-log.txt`.
- Records the timestamp, HTTP method, and endpoint accessed.
- Simple and lightweight, designed to be easy to use.

## Installation

1. Download the plugin ZIP file or clone this repository.
2. Upload the `custom-api-logger` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

- Once activated, the plugin will automatically start logging API requests.
- Check the log file located at `wp-content/api-request-log.txt` for the recorded API activity.
- No additional configuration is required.

## Monitoring Unusual Activity

- Review the log file periodically to identify any unusual API requests.
- Unusual activities might include unauthorized DELETE requests, unexpected POST requests, or repeated requests from the same IP address.

## Troubleshooting

- Ensure the `wp-content` directory is writable. If the `api-request-log.txt` file is not created, check the file permissions.
- If the plugin does not log requests, deactivate and reactivate it to reset the logging process.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request with your changes.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Credits

Developed by Razel Ahmed.
