import gulp from 'gulp';

import plumber from 'gulp-plumber';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import autoprefixer from 'gulp-autoprefixer';
import sourcemaps from 'gulp-sourcemaps';

// Styles
export const styles = () => {
    return gulp.src('./app/scss/**/style.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(cleanCSS({
            debug: true,
            compatibility: '*'
        }, details => {
            console.log(`${details.name}: Original size:${details.stats.originalSize} - Minified size: ${details.stats.minifiedSize}`)
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('app/css'))
}

export const watch = () => {
    gulp.watch('./app/scss/**/*.scss', gulp.series(styles));
};