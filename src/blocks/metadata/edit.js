import '@wordpress/block-editor';
import { useBlockProps } from '@wordpress/block-editor';
import { TextControl } from '@wordpress/components';

const Edit = ({ attributes, setAttributes }) => {

    return (
        <div {...useBlockProps()}>
            <TextControl
                label={'Custom Field'}
                value={attributes.fieldName}
                onChange={(val) => setAttributes({ fieldName: val })}
            />
        </div>
    )
};

export default Edit;