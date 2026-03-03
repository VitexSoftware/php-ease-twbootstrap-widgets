# WARP.md - Working AI Reference for php-vitexsoftware-ease-twbootstrap3-widgets

## Project Overview
**Type**: PHP Project/Debian Package
**Purpose**: ![EasePHP Framework Logo](https://raw.githubusercontent.com/VitexSoftware/Ease-PHP-Bricks/master/project-logo.png "Project Logo")
**Status**: Active
**Repository**: git@github.com:VitexSoftware/php-ease-twbootstrap-widgets.git

## Key Technologies
- PHP
- Composer
- Debian Packaging
- Docker

## Architecture & Structure
```
php-vitexsoftware-ease-twbootstrap3-widgets/
├── src/           # Source code
├── tests/         # Test files
├── docs/          # Documentation
└── ...
```

## Development Workflow

### Prerequisites
- Development environment setup
- Required dependencies

### Setup Instructions
```bash
# Clone the repository
git clone git@github.com:VitexSoftware/php-ease-twbootstrap-widgets.git
cd php-vitexsoftware-ease-twbootstrap3-widgets

# Install dependencies
composer install
```

### Build & Run
```bash
dpkg-buildpackage -b -uc\ndocker build -t php-vitexsoftware-ease-twbootstrap3-widgets .
```

### Testing
```bash
composer test
```

## Key Concepts
- **Main Components**: Core functionality and modules
- **Configuration**: Configuration files and environment variables
- **Integration Points**: External services and dependencies

## Common Tasks

### Development
- Review code structure
- Implement new features
- Fix bugs and issues

### Deployment
- Build and package
- Deploy to target environment
- Monitor and maintain

## Troubleshooting
- **Common Issues**: Check logs and error messages
- **Debug Commands**: Use appropriate debugging tools
- **Support**: Check documentation and issue tracker

## Additional Notes
- Project-specific conventions
- Development guidelines
- Related documentation
