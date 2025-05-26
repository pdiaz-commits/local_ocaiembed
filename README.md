# local_ocaiembed
Embed url inside moodle

# OCAI Embed URL Plugin for Moodle

This plugin allows teachers and course managers to embed any external URL directly into Moodle courses, making it easy to display external resources, apps, or tools within the Moodle interface.

## Features

- Embed any public URL or web app inside a Moodle course.
- Simple and intuitive interface: just paste the URL.
- Optionally set iframe width/height.
- Only users with editing rights can add or modify embedded URLs.
- Supports responsive display for mobile and desktop.
- Complies with Moodle security policies (uses allowlist/whitelist for domains if required).

## Installation

1. Unzip the `local_ocai_embedurl` folder into your Moodle installation's `local/` directory.
2. Visit **Site Administration > Notifications** to complete installation.
3. Set permissions if needed (by default, editingteachers and managers can configure embedded URLs).

## Usage

1. In your course, go to **Site Administration > Plugins > Local plugins > OCAI Embed URL** settings (or use the provided block/filter if relevant).
2. Paste the desired URL to embed.
3. Set optional width and height (default: 100% width, 600px height).
4. Save changes.
5. The embedded content will now be visible to students in the selected location.

## Example use cases

- Embed Google Docs, YouTube videos, Padlet, GeoGebra, etc.
- Display external dashboards, analytics, or web applications.
- Integrate custom interactive content without leaving Moodle.

## Security Notes

- For security, only allow embedding from trusted sites.
- If needed, administrators can restrict allowed domains in plugin settings.

## License

GNU GPL v3 or later  
Copyright (c) 2025 Pablo Jesús Díaz Ruiz

---

For support, contact: [pj040dr@gmail.com](mailto:pj040dr@gmail.com)


