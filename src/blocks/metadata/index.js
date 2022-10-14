import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import './style.scss';

// Register the block
registerBlockType('sg/metadata', {
    edit: Edit
});