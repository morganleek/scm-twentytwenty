# SCM Twenty Twenty Child Theme (scm-twentytwenty)
Six Character Media Twenty Twenty Child with Gulp and Webpack

```bash
# Install dependencies
npm install
```

## Start Checklist
1. Update `gulpfile.babel.js` to your development domain.
2. Update `package.json` name and description to match project.
3. Create `screenshot.png` based on site design.

```bash
# Dev
gulp 
# Build
gulp build --prod
# Bundle
gulp bundle --prod // Bundle
```

## Deploy Checklist
1. Run `gulp bundle --prod`.
2. Copy `wp-content/themes/{project-name}` to live location.